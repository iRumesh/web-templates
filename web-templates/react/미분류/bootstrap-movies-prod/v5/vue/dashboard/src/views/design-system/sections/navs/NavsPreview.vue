<template>
  <div class="bd-example">
    <nav class="nav">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link disabled" href="#" tabindex="-1">Disabled</a>
    </nav>
  </div>
  <div class="bd-example">
    <nav>
      <div id="nav-tab" class="mb-3 nav nav-tabs" role="tablist">
        <button id="nav-home-tab" class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
        <button id="nav-profile-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
        <button id="nav-contact-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
      </div>
    </nav>
    <div id="simple-tab-content" class="tab-content iq-tab-fade-up">
      <div id="nav-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
        <p><strong>This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
      <div id="nav-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-profile-tab">
        <p><strong>This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
      <div id="nav-contact" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
    </div>
  </div>
  <div class="bd-example">
    <nav class="tab-bottom-bordered mb-3">
      <div id="nav-tab1" class="mb-0 nav nav-tabs" role="tablist">
        <button id="nav-home-11-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-home-11" type="button" role="tab" aria-controls="nav-home-11" aria-selected="true">Home</button>
        <button id="nav-profile-11-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-profile-11" type="button" role="tab" aria-controls="nav-profile-11" aria-selected="false">Profile</button>
        <button id="nav-contact-11-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-contact-11" type="button" role="tab" aria-controls="nav-contact-11" aria-selected="false">Contact</button>
      </div>
    </nav>
    <div id="nav-tabContent" class="tab-content iq-tab-fade-up">
      <div id="nav-home-11" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-11-tab">
        <p><strong>This is some placeholder content the Home tab's associated content.</strong></p>
      </div>
      <div id="nav-profile-11" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-profile-11-tab">
        <p><strong>This is some placeholder content the Profile tab's associated content.</strong></p>
      </div>
      <div id="nav-contact-11" class="tab-pane fade" role="tabpanel" aria-labelledby="nav-contact-11-tab">
        <p><strong>This is some placeholder content the Contact tab's associated content.</strong></p>
      </div>
    </div>
  </div>
  <div class="bd-example">
    <ul class="nav nav-pills" data-toggle="slider-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#pills-home1" type="button" role="tab" aria-selected="true">Home</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#pills-profile1" type="button" role="tab" aria-selected="false">Profile</button>
      </li>
      <li class="nav-item" role="presentation">
        <button id="contact-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#pills-contact1" type="button" role="tab" aria-selected="false">Contact</button>
      </li>
    </ul>
    <div class="tab-content iq-tab-fade-up">
      <div id="pills-home1" class="tab-pane fade show active" role="tabpanel">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
      </div>
      <div id="pills-profile1" class="tab-pane fade" role="tabpanel">
        <p>Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
      </div>
      <div id="pills-contact1" class="tab-pane fade" role="tabpanel">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
      </div>
    </div>
  </div>
  <div class="bd-example">
    <ul class="nav nav-tabs nav-tunnel nav-slider" data-toggle="slider-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button id="icon-home-1-tab" class="nav-link active d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#icon-home-1" type="button" role="tab" aria-selected="true">
          <svg width="20" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="currentColor"></path>
          </svg>
          Home
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button id="icon-profile-1-tab" class="nav-link d-flex align-items-center" data-bs-toggle="tab" data-bs-target="#icon-profile-1" type="button" role="tab" aria-selected="false">
          <svg width="20" class="me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z" fill="currentColor"></path>
            <path opacity="0.4" d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z" fill="currentColor"></path>
          </svg>
          Profile
        </button>
      </li>
    </ul>
    <div id="icon-tab-content" class="tab-content iq-tab-fade-up">
      <div id="icon-home-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="icon-home-1-tab">
        <p><strong>This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
      <div id="icon-profile-1" class="tab-pane fade" role="tabpanel" aria-labelledby="icon-profile-1-tab">
        <p><strong>This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
    </div>
  </div>
  <div class="bd-example mb-5">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="bd-example">
    <nav>
      <div id="nav-tab3" class="mb-3 nav nav-tabs nav-iconly gap-3" role="tablist">
        <button id="pro-nav-home-tab" class="nav-link active" data-bs-toggle="tab" data-bs-target="#pro-nav-home" type="button" role="tab" aria-controls="pro-nav-home" aria-selected="true">
          <svg class="icon-40" width="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M16.6203 22H7.3797C4.68923 22 2.5 19.8311 2.5 17.1646V11.8354C2.5 9.16894 4.68923 7 7.3797 7H16.6203C19.3108 7 21.5 9.16894 21.5 11.8354V17.1646C21.5 19.8311 19.3108 22 16.6203 22Z" fill="currentColor"></path>
            <path d="M15.7551 10C15.344 10 15.0103 9.67634 15.0103 9.27754V6.35689C15.0103 4.75111 13.6635 3.44491 12.0089 3.44491C11.2472 3.44491 10.4477 3.7416 9.87861 4.28778C9.30854 4.83588 8.99272 5.56508 8.98974 6.34341V9.27754C8.98974 9.67634 8.65604 10 8.24487 10C7.8337 10 7.5 9.67634 7.5 9.27754V6.35689C7.50497 5.17303 7.97771 4.08067 8.82984 3.26285C9.68098 2.44311 10.7814 2.03179 12.0119 2C14.4849 2 16.5 3.95449 16.5 6.35689V9.27754C16.5 9.67634 16.1663 10 15.7551 10Z" fill="currentColor"></path>
          </svg>
          Your Orders
        </button>
        <button id="pro-nav-profile-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#pro-nav-profile" type="button" role="tab" aria-controls="pro-nav-profile" aria-selected="false">
          <svg class="icon-40" width="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2194 4.89463C17.8608 2.7788 22.3367 2.81578 25.9439 4.9915C29.5157 7.21153 31.6866 11.1736 31.6664 15.4358C31.5832 19.6699 29.2555 23.65 26.3458 26.7268C24.6664 28.5107 22.7877 30.0881 20.748 31.4267C20.538 31.5482 20.3079 31.6295 20.0691 31.6667C19.8393 31.6569 19.6155 31.589 19.4179 31.4691C16.304 29.4576 13.5722 26.8901 11.3539 23.8899C9.49763 21.3856 8.44304 18.36 8.33331 15.224C8.3309 10.9538 10.5779 7.01046 14.2194 4.89463ZM16.3236 16.9913C16.9361 18.5014 18.3819 19.4864 19.986 19.4864C21.0368 19.494 22.047 19.0731 22.7913 18.3175C23.5357 17.5619 23.9524 16.5344 23.9487 15.464C23.9543 13.8301 22.9924 12.3539 21.5121 11.7246C20.0318 11.0954 18.325 11.4373 17.1888 12.5906C16.0526 13.7439 15.711 15.4812 16.3236 16.9913Z" fill="currentColor" />
            <ellipse opacity="0.4" cx="20" cy="35" rx="8.33333" ry="1.66667" fill="currentColor" />
          </svg>
          Your Address
        </button>
        <button id="pro-nav-contact-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#pro-nav-contact" type="button" role="tab" aria-controls="pro-nav-contact" aria-selected="false">
          <svg class="icon-40" width="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.6607 13.9585H29.6029C26.3185 13.9643 23.6578 16.5586 23.6518 19.7609C23.6474 22.9705 26.3111 25.5763 29.6029 25.5807H36.6666V26.0906C36.6666 31.6893 33.2726 35 27.5289 35H12.4726C6.72739 35 3.33331 31.6893 3.33331 26.0906V13.8964C3.33331 8.2977 6.72739 5 12.4726 5H27.5229C33.2666 5 36.6607 8.2977 36.6607 13.8964V13.9585ZM11.2326 13.9455H20.6326H20.6385H20.6504C21.3541 13.9427 21.9229 13.3836 21.92 12.6961C21.917 12.01 21.3422 11.4553 20.6385 11.4582H11.2326C10.5333 11.4611 9.96591 12.0143 9.96294 12.6975C9.95998 13.3836 10.5289 13.9427 11.2326 13.9455Z" fill="currentColor" />
            <path opacity="0.4" d="M26.729 20.4944C27.0775 22.0798 28.4674 23.1951 30.0543 23.1661H35.4708C36.1311 23.1661 36.6666 22.6193 36.6666 21.9434V17.7242C36.6652 17.0497 36.1311 16.5015 35.4708 16.5H29.9268C28.1217 16.5058 26.6638 18.0041 26.6666 19.8505C26.6666 20.0666 26.6879 20.2827 26.729 20.4944" fill="currentColor" />
            <ellipse cx="30" cy="19.8333" rx="1.66667" ry="1.66667" fill="currentColor" />
          </svg>
          Your Cards
        </button>
        <button id="pro-nav-demo-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#pro-nav-demo" type="button" role="tab" aria-controls="pro-nav-contact" aria-selected="false">
          <svg class="icon-40" width="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.9947 25.291C12.8063 25.291 6.66632 26.4243 6.66632 30.9577C6.66632 35.4927 12.768 36.666 19.9947 36.666C27.183 36.666 33.323 35.5343 33.323 30.9993C33.323 26.4643 27.223 25.291 19.9947 25.291" fill="currentColor" />
            <path opacity="0.4" d="M19.9947 20.9728C24.8913 20.9728 28.8147 17.0478 28.8147 12.1528C28.8147 7.25782 24.8913 3.33282 19.9947 3.33282C15.0997 3.33282 11.1747 7.25782 11.1747 12.1528C11.1747 17.0478 15.0997 20.9728 19.9947 20.9728" fill="currentColor" />
          </svg>
          Profile
        </button>
      </div>
    </nav>
    <div id="nav-tab-content" class="tab-content iq-tab-fade-up">
      <div id="pro-nav-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pro-nav-home-tab">
        <p><strong>This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
      <div id="pro-nav-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="pro-nav-profile-tab">
        <p><strong>This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
      <div id="pro-nav-contact" class="tab-pane fade" role="tabpanel" aria-labelledby="pro-nav-contact-tab">
        <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
      <div id="pro-nav-demo" class="tab-pane fade" role="tabpanel" aria-labelledby="pro-nav-demo-tab">
        <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
      </div>
    </div>
  </div>
  <div class="bd-example">
    <div class="d-flex align-items-start gap-3">
      <div id="v-pills-tab" class="nav flex-column nav-pills nav-iconly gap-3" role="tablist" aria-orientation="vertical">
        <button id="v-pills-home-tab" class="nav-link active" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
          <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="currentColor"></path>
          </svg>
          Home
        </button>
        <button id="v-pills-profile-tab" class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
          <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z" fill="currentColor"></path>
            <path opacity="0.4" d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z" fill="currentColor"></path>
          </svg>
          Profile
        </button>
        <button id="v-pills-messages-tab" class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
          <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4" d="M12.02 2C6.21 2 2 6.74 2 12C2 13.68 2.49 15.41 3.35 16.99C3.51 17.25 3.53 17.58 3.42 17.89L2.75 20.13C2.6 20.67 3.06 21.07 3.57 20.91L5.59 20.31C6.14 20.13 6.57 20.36 7.081 20.67C8.541 21.53 10.36 21.97 12 21.97C16.96 21.97 22 18.14 22 11.97C22 6.65 17.7 2 12.02 2Z" fill="currentColor"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9807 13.2901C11.2707 13.2801 10.7007 12.7101 10.7007 12.0001C10.7007 11.3001 11.2807 10.7201 11.9807 10.7301C12.6907 10.7301 13.2607 11.3001 13.2607 12.0101C13.2607 12.7101 12.6907 13.2901 11.9807 13.2901ZM7.37033 13.2901C6.67033 13.2901 6.09033 12.7101 6.09033 12.0101C6.09033 11.3001 6.66033 10.7301 7.37033 10.7301C8.08033 10.7301 8.65033 11.3001 8.65033 12.0101C8.65033 12.7101 8.08033 13.2801 7.37033 13.2901ZM15.3105 12.0101C15.3105 12.7101 15.8805 13.2901 16.5905 13.2901C17.3005 13.2901 17.8705 12.7101 17.8705 12.0101C17.8705 11.3001 17.3005 10.7301 16.5905 10.7301C15.8805 10.7301 15.3105 11.3001 15.3105 12.0101Z" fill="currentColor"></path>
          </svg>
          Messages
        </button>
        <button id="v-pills-settings-tab" class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
          <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.0122 14.8299C10.4077 14.8299 9.10986 13.5799 9.10986 12.0099C9.10986 10.4399 10.4077 9.17993 12.0122 9.17993C13.6167 9.17993 14.8839 10.4399 14.8839 12.0099C14.8839 13.5799 13.6167 14.8299 12.0122 14.8299Z" fill="currentColor"></path>
            <path opacity="0.4" d="M21.2301 14.37C21.036 14.07 20.76 13.77 20.4023 13.58C20.1162 13.44 19.9322 13.21 19.7687 12.94C19.2475 12.08 19.5541 10.95 20.4228 10.44C21.4447 9.87 21.7718 8.6 21.179 7.61L20.4943 6.43C19.9118 5.44 18.6344 5.09 17.6226 5.67C16.7233 6.15 15.5685 5.83 15.0473 4.98C14.8838 4.7 14.7918 4.4 14.8122 4.1C14.8429 3.71 14.7203 3.34 14.5363 3.04C14.1582 2.42 13.4735 2 12.7172 2H11.2763C10.5302 2.02 9.84553 2.42 9.4674 3.04C9.27323 3.34 9.16081 3.71 9.18125 4.1C9.20169 4.4 9.10972 4.7 8.9462 4.98C8.425 5.83 7.27019 6.15 6.38109 5.67C5.35913 5.09 4.09191 5.44 3.49917 6.43L2.81446 7.61C2.23194 8.6 2.55897 9.87 3.57071 10.44C4.43937 10.95 4.74596 12.08 4.23498 12.94C4.06125 13.21 3.87729 13.44 3.59115 13.58C3.24368 13.77 2.93709 14.07 2.77358 14.37C2.39546 14.99 2.4159 15.77 2.79402 16.42L3.49917 17.62C3.87729 18.26 4.58245 18.66 5.31825 18.66C5.66572 18.66 6.0745 18.56 6.40153 18.36C6.65702 18.19 6.96361 18.13 7.30085 18.13C8.31259 18.13 9.16081 18.96 9.18125 19.95C9.18125 21.1 10.1215 22 11.3069 22H12.6968C13.872 22 14.8122 21.1 14.8122 19.95C14.8429 18.96 15.6911 18.13 16.7029 18.13C17.0299 18.13 17.3365 18.19 17.6022 18.36C17.9292 18.56 18.3278 18.66 18.6855 18.66C19.411 18.66 20.1162 18.26 20.4943 17.62L21.2097 16.42C21.5776 15.75 21.6083 14.99 21.2301 14.37Z" fill="currentColor"></path>
          </svg>
          Settings
        </button>
      </div>
      <div id="v-pills-tabContent" class="tab-content iq-tab-fade-up">
        <div id="v-pills-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
        </div>
        <div id="v-pills-profile" class="tab-pane fade" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
        </div>
        <div id="v-pills-messages" class="tab-pane fade" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
        </div>
        <div id="v-pills-settings" class="tab-pane fade" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
        </div>
      </div>
    </div>
  </div>
</template>
