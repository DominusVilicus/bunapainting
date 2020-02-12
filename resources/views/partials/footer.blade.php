<footer>
  @if(get_field('footer-disable') == false)
  <div class="consult-footer">
    <div class="inner-footer padding-medium">
      <div class="flex text-align-center flex-center-all tablet-wrap">
          <h2>Book a free quote today</h2>
          <div class='end tablet'>
            <a href="{{ get_field('call-to-action-link', 'options') }}" class="main-button">{{ get_field('call-to-action-text', 'options') }}</a>
          </div>
      </div>
    </div>
  </div>
  @endif
  <div class="middle-footer">
    <div class="inner-footer padding-small">
      <div class="footer-container">
        <h2>Links</h2>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </div>
      <div class="footer-container">
        <h2>Contact Us</h2>
        <div>
          <a href="{{ get_field('phone', 'options') }}" class="icon-text-container light flex row">
            <div class="icon-container">
                <i class="material-icons">phone</i>
            </div>
            <div class="icon-text">
              {{ get_field('phone', 'options') }}
            </div>
          </a>
          <a href="#" class="icon-text-container light flex row">
            <div class="icon-container">
                <i class="material-icons">place</i>
            </div>
            <div class="icon-text">
              {{ get_field('location', 'options') }}
            </div>
          </a>
          <a href="mailto:{{ get_field('email', 'options') }}" class="icon-text-container light flex row">
            <div class="icon-container">
                <i class="material-icons">email</i>
            </div>
            <div class="icon-text">
              {{ get_field('email', 'options') }}
            </div>
          </a>
        </div>
      </div>
      <div class="footer-container end text-align-right align-end tablet flex column align-right-always">
        <div>
          {!! get_field('disclaimer-footer', 'options') !!}
        </div>
        <br>
        <div>{{ get_field('tagline', 'options') }}</div>
        <div class="flex align-end">
          <a href="https://insanemarketing.com.au">Web Design by Insane Marketing</a>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <a class="footer-logo" href="{{ home_url('/') }}">
      <img src="{{ get_field('logo', 'options') }}">
    </a>
    <span class="footer-tagline">{{ get_field('tagline', 'options') }}</span>
  </div>
</footer>