<header>
  <script>
      function toggle_visibility(id) {
          var e = document.getElementById(id);
          
          if(e){
              if (e.style.display == 'flex') {
                  e.style.display = 'none';
              }
              else {
                  e.style.display = 'flex';
              }
          }
      }

      if (matchMedia) {
          var mq = window.matchMedia("(min-width: 1000px)");
          mq.addListener(WidthChange('nav-primary'));
          WidthChange(mq);
      }

      function WidthChange(name) {
          return function(mq){
              if (mq.matches) {
                  try {
                      var e = document.getElementById(name);
                      e.removeAttribute("style");
                  } catch (err) {
                      console.log("Could not delete Style Attribute");
                  }
              }
          }
      }

      /*

      jQuery(function() {
          jQuery('.menu-item-has-children a').click(function() {
              let sibling = jQuery(this).siblings('.sub-menu')[0]
              if(sibling){
                  if (sibling.style.display == 'flex') {
                      sibling.style.display = 'none';
                  }
                  else {
                      sibling.style.display = 'flex';
                  }
              }
          });
      });

      */

  </script>
  <div class="banner"></div>
  <div class="top-header">
    <div class="inner-header">
      <a href="#" onclick="toggle_visibility('nav-primary')" class="menu-item-menu">
        <i class="material-icons">
            menu
        </i>
      </a>
      <nav class="nav-primary" id="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
      <div class="menu-item special end">
        <a href="{{ get_field('call-to-action-link', 'options') }}">
          {{ get_field('call-to-action-text', 'options') }}
        </a>
      </div>
    </div>
    
  </div>
  <div class="bottom-header">
    <div class="inner-header">
      <a class="header-logo" href="{{ home_url('/') }}">
        <img src="{{ get_field('logo', 'options') }}">
      </a>
      <a href="tel:{{ get_field('phone', 'options') }}" class="end menu-item flex-center-all icon-text-container">
        <div class="icon-text mobile-none">{{ get_field('phone', 'options') }}</div>
        <div class="icon-container">
            <i class="material-icons">phone</i>
        </div>
      </a>
    </div>
  </div>
</header>
