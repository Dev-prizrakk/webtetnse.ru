<section class="contact">
    <div class="container">
        <h2>Оставьте заявку</h2>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Имя">
            <input type="email" name="email" placeholder="Email">
            <textarea name="message" placeholder="Ваше сообщение"></textarea>
            <button type="submit" class="btn">Отправить</button>
        </form>
    </div>
</section>
