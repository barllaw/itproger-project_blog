<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/">Company name</a></h5>
<?php if( !$_SESSION['id'] ): ?>
  <a class="btn btn-outline-primary mr-2" href="/auth">Войти</a>
  <a class="btn btn-outline-primary" href="/reg">Регистрация</a>
<?php else: ?>
  <a class="btn  mr-2" href="/">Главная</a>
  <a class="btn  mr-2" href="/contact">Контакты</a>
  <a class="btn  mr-2" href="/article">Добавить статью</a>
  <a class="btn mr-2" href="/users">Список пользователей</a>
  <a class="btn btn-outline-primary mr-2" href="/profile">Кабинет пользователя</a>
<?php endif; ?>
</div>