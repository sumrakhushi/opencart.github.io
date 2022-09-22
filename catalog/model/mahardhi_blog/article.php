<?php
class ModelMahardhiBlogArticle extends Model {
	public function updateViewed($article_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "newsblog_article SET viewed = (viewed + 1) WHERE article_id = '" . (int)$article_id . "'");

	}
	public function updateComment($article_id) {

		$query= "SELECT COUNT(*) AS total_comment FROM " . DB_PREFIX . "newsblog_article_comment WHERE article_id = '" . (int)$article_id . "' AND status = '1'";

		$sql = $this->db->query($query);
		$comment_count = $sql->row['total_comment'];
		return $comment_count;

	}

	public function getArticle($article_id) {
		$query = $this->db->query("SELECT DISTINCT *, pd.name AS name, p.image,
		p.sort_order

		FROM " . DB_PREFIX . "newsblog_article p
		LEFT JOIN " . DB_PREFIX . "newsblog_article_description pd ON (p.article_id = pd.article_id)
		LEFT JOIN " . DB_PREFIX . "newsblog_article_to_store p2s ON (p.article_id = p2s.article_id)


		WHERE p.article_id = '" . (int)$article_id . "' AND
		pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND
		p.status = '1' AND
		p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return array(
				'article_id'       => $query->row['article_id'],
				'name'             => $query->row['name'],
				'preview'      	   => $query->row['preview'],
				'description'      => $query->row['description'],
				'meta_title'       => $query->row['meta_title'],
				'article_author'   => $query->row['article_author'],
				'meta_description' => $query->row['meta_description'],
				'meta_keyword'     => $query->row['meta_keyword'],
				'tag'              => $query->row['tag'],
				'image'            => $query->row['image'],
				'date_available'   => $query->row['date_available'],
				'sort_order'       => $query->row['sort_order'],
				'status'           => $query->row['status'],
				'date_modified'    => $query->row['date_modified']
			);
		} else {
			return false;
		}

	}

	public function getArticles($data = array()) {

		$sql = "SELECT a.article_id, a.image, a.status" ." FROM " . DB_PREFIX . "newsblog_article a";

		$sql .= " LEFT JOIN " . DB_PREFIX . "newsblog_article_description ad ON (a.article_id = ad.article_id)
		LEFT JOIN " . DB_PREFIX . "newsblog_article_to_store a2s ON (a.article_id = a2s.article_id)
		WHERE ad.language_id = '" . (int)$this->config->get('config_language_id') . "' AND
		a.status = '1' AND
		a2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		$sql .= " GROUP BY a.article_id";

		if (isset($data['sort'])) {
			if ($data['sort'] == 'ad.name') {
				$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
			} else {
				$sql .= " ORDER BY " . $data['sort'];
			}
		} else {
			$sql .= " ORDER BY a.sort_order";
		}

		if (isset($data['order'])) {
			$sql .= " ".$data['order'];
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 10;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$article_data = array();

		$query = $this->db->query($sql);
		foreach ($query->rows as $result) {
			$article_data[$result['article_id']] = $this->getArticle($result['article_id']);
		}

		return $article_data;
	}

	public function getArticleImages($article_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "newsblog_article_image WHERE article_id = '" . (int)$article_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}


	public function getTotalArticles($data = array()) {
		$sql = "SELECT COUNT(DISTINCT p.article_id) AS total";

		$sql .= " FROM " . DB_PREFIX . "newsblog_article p";

		$sql .= " LEFT JOIN " . DB_PREFIX . "newsblog_article_description pd ON (p.article_id = pd.article_id) LEFT JOIN " . DB_PREFIX . "newsblog_article_to_store p2s ON (p.article_id = p2s.article_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

		if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
			$sql .= " AND (";

			if (!empty($data['filter_name'])) {
				$implode = array();

				$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

				foreach ($words as $word) {
					$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
				}

				if ($implode) {
					$sql .= " " . implode(" AND ", $implode) . "";
				}

				if (!empty($data['filter_description'])) {
					$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
				}
			}

			if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
				$sql .= " OR ";
			}

			if (!empty($data['filter_tag'])) {
				$sql .= "pd.tag LIKE '%" . $this->db->escape(utf8_strtolower($data['filter_tag'])) . "%'";
			}

			$sql .= ")";
		}


		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getPostComments($article_id) {
		$sql = "SELECT DISTINCT * FROM " . DB_PREFIX . "newsblog_article_comment WHERE article_id = '" . (int)$article_id . "' AND status = '1' ";
		$result = $this->db->query($sql);
		return $result->rows;
	}
	public function getBlogComments($article_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "newsblog_article_comment bc LEFT JOIN " . DB_PREFIX . "newsblog_article_description bcd ON (bc.article_id = bcd.article_id) WHERE  bc.status = '1'  ORDER BY bc.date_added DESC");

		return $query->rows;
	}

	public function addReview($data) {
		$sql = "INSERT INTO " . DB_PREFIX . "newsblog_article_comment "
        . "SET article_id = '" . $this->db->escape($data['article_id']) . "',
        		author = '" . $this->db->escape($data['author']) . "',
        		email = '" . $this->db->escape($data['email']) . "',
        		comment_text = '" . $this->db->escape($data['comment_text']) . "',
        	 	date_added = NOW() ";
						return $this->db->query($sql);
		}

    public function getUser($user_id) {
        $query = $this->db->query("SELECT *, (SELECT ug.name FROM `" . DB_PREFIX . "user_group` ug WHERE ug.user_group_id = u.user_group_id) AS user_group FROM `" . DB_PREFIX . "user` u WHERE u.user_id = '" . (int)$user_id . "'");

        return $query->row;
    }
}
