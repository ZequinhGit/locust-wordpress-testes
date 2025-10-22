from locust import HttpUser, task, between

# TROQUE pelos IDs reais: /?p=<ID>
POST_IMG_1MB   = "/?p=8"  # imagem ~1 MB
POST_TEXTO_400 = "/?p=11"  # texto ~400 KB
POST_IMG_300KB = "/?p=5"  # imagem ~300 KB

class WordPressUser(HttpUser):
    wait_time = between(1, 3)

    @task(3)
    def post_imagem_grande(self):
        self.client.get(POST_IMG_1MB, name="Post imagem 1MB")

    @task(2)
    def post_texto_longo(self):
        self.client.get(POST_TEXTO_400, name="Post texto 400KB")

    @task(2)
    def post_imagem_leve(self):
        self.client.get(POST_IMG_300KB, name="Post imagem 300KB")
