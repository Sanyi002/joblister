<?php
class Job {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Get all job
    public function getAllJobs() {
        $this->db->query("SELECT jobs.*, categories.name AS cname
            FROM jobs
            INNER JOIN categories
            ON jobs.category_id = categories.id
            ORDER BY post_date DESC");

        $results = $this->db->resultSet();
        return $results;
    }

    // Get all category
    public function getCategories() {
        $this->db->query("SELECT * FROM categories");
        $results = $this->db->resultSet();

        return $results;
    }

    // Get jobs by category
    public function getByCategory($category) {
        $this->db->query("SELECT jobs.*, categories.name AS cname
            FROM jobs
            INNER JOIN categories
            ON jobs.category_id = categories.id
            WHERE jobs.category_id = $category
            ORDER BY post_date DESC");

        $results = $this->db->resultSet();
        return $results;
    }

    // Get category name
    public function getCategory($category_id) {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind(':category_id', $category_id);

        $result = $this->db->single();
        return $result;
    }

    // Get job

    public function getJob($job_id) {
        $this->db->query("SELECT * FROM jobs WHERE id = :job_id");
        $this->db->bind(':job_id', $job_id);

        $result = $this->db->single();
        return $result;
    }
}