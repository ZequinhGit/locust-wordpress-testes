from locust import HttpUser, task, between

class WordPressUser(HttpUser):
    wait_time = between(1, 3)

    @task(10)
    def visit_homepage(self):
        self.client.get("/") # Simple GET

    @task(3)
    def visit_sample_post(self):
        self.client.get("/?p=1") # Simple GET