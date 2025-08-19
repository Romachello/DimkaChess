document.addEventListener("DOMContentLoaded", function() {
    const posts = document.querySelectorAll('.post__item');
    const modal = document.getElementById('modal');
    const modalImg = document.getElementById('modal-img');
    const modalTitle = document.getElementById('modal-title');
    const modalText = document.getElementById('modal-text');
    const closeBtn = document.querySelector('.close');
    const body = document.body;

    function openModal() {
        modal.classList.add('active');
        body.classList.add('modal-open');
    }

    function closeModal() {
        modal.classList.remove('active');
        body.classList.remove('modal-open');
    }

    posts.forEach(post => {
        post.addEventListener('click', function() {
            const imgSrc = post.querySelector('.img__item').src;
            const title = post.querySelector('.item__title').textContent;
            let text = post.querySelector('.item__text-post').innerHTML;

            // Убираем артефакты переносов строк
            text = text.replace(/\\r\\n|\\r|\\n/g, "<br>"); 

            modalImg.src = imgSrc;
            modalTitle.textContent = title;
            modalText.innerHTML = text; // Используем innerHTML для корректного отображения

            openModal();
        });
    });

    closeBtn.addEventListener('click', closeModal);
    document.addEventListener('keydown', (event) => {
        if (event.key === "Escape") {
            closeModal();
        }
    });

    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });
});
