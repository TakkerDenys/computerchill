<header>
    <div class="logo-info">
        <h3 class="logo"><a class="clear-logo" href="/">ComputerChill</a></h3>
        <p class="desc">Попочинь з комп'ютерами</p>
    </div>
    <nav>
        <ul class="nav">
            <li <?php echo is_category('computers') ? 'class="active"' : ''; ?>><a href="/?category=computers">Комп'ютери</a></li>
            <li <?php echo is_category('сomponents') ? 'class="active"' : ''; ?>><a href="/?category=сomponents">Комплектуючі</a></li>
            <li <?php echo is_category('technologies') ? 'class="active"' : ''; ?>><a href="/?category=technologies">Нові технології</a></li>
            <li <?php echo is_category('phones') ? 'class="active"' : ''; ?>><a href="/?category=phones">Телефони</a></li>
            <li <?php echo is_category('periphery') ? 'class="active"' : ''; ?>><a href="/?category=periphery">Периферія</a></li>
            <li <?php echo is_category('programs') ? 'class="active"' : ''; ?>><a href="/?category=programs">Програмне забезпечення</a></li>
            <li <?php echo is_category('games') ? 'class="active"' : ''; ?>><a href="/?category=games">Ігри</a></li>
    </nav>
    <form class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <label>
            <input type="text" name="s" placeholder="Пошук..." value="<?php echo get_search_query(); ?>">
        </label>
        <input type="submit" value="Знайти">
    </form>
</header>
