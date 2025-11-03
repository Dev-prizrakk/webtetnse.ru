<section class="estimate">
    <div class="container">
        <div class="estimate__form">
            <h2>Запросить расчет сметы</h2>
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <textarea name="message" placeholder="Опишите проект"></textarea>
                <button type="submit" class="btn">Отправить</button>
            </form>
        </div>
    </div>
</section>
