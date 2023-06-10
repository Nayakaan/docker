<?php get_header(); ?>
<main>
  <div class="bg-dark">
    <div class="current-game-wrapper">
      <div>
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/main-mobile-bg.png'?>">
          <img class="current-game__img" fetchpriority="high" src="<?php echo get_template_directory_uri() . '/assets/public/images/main-desktop-bg.png'?>" alt="" width="1440" height="272">
        </picture>
      </div>
      <div class="current-game__content">
        <div class="current-game__team-wrapper">
          <div class="current-game__team-name-wrapper">
            <p class="current-game__team-name f-600">Outlaws</p>
          </div>
          <div class="current-game__icon-wrapper">
            <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/outlaws--big.svg'?>" alt="">
          </div>
        </div>
        <div class="current-game__info">
          <span class="group">GROUP A</span>
          <p class="current-game__day f-700">Monday, May 22th</p>
          <p class="current-game__hour f-500">13:45</p>
          <a href="#" class="btn-primary current-game__btn">Bet Now</a>
        </div>
        <div class="current-game__team-wrapper current-game__team-wrapper--reversed">
          <div class="current-game__team-name-wrapper current-game__team-name-wrapper--reversed">
            <p class="current-game__team-name f-600">FNATIC</p>
          </div>
          <div class="current-game__icon-wrapper current-game__icon-wrapper--reversed">
            <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic--big.svg'?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="container-md curent-game-bets-wrapper">
      <div class="match-bet-dropdown">
        <div class="match-bet-dropdown__info">
          <div class="match-bet-dropdown__info-icon">  
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="19" height="19" rx="3" fill="#64A0FA"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1641 5.2189C12.1444 5.22886 12.122 5.23858 12.0903 5.2446C11.9491 5.44566 12.0342 5.42216 11.7855 5.59011C11.7859 5.92705 11.7956 5.96328 11.8741 6.2618C11.8759 6.26898 11.8749 6.27581 11.8711 6.28217C11.8672 6.28842 11.8617 6.29247 11.8544 6.29398C11.7943 6.30706 11.7078 6.3294 11.6578 6.33889C11.6593 6.34942 11.6832 6.54029 11.6563 6.68232C11.6141 6.90536 11.0872 7.39336 10.9613 7.41836C10.7871 7.45297 10.5926 7.2981 10.2883 7.1636C10.2044 7.12644 9.92305 6.9402 9.77583 6.89066C9.65354 6.84969 9.53103 7.14925 9.68285 7.22969C9.75353 7.26708 9.86616 7.31743 9.90179 7.41026C10.0073 7.68586 9.88524 8.74832 9.66768 8.96187C9.56448 8.96118 9.47759 8.86569 9.40093 8.89069C9.26405 8.96616 9.35071 9.3876 9.40093 9.46087C10.2431 10.3334 10.143 10.9795 10.5007 11.462C10.6636 11.462 10.5566 11.636 10.6803 11.8403C10.7133 11.9453 10.6708 12.1236 10.6531 12.1913V12.4545C10.644 12.4819 10.6349 12.5092 10.6258 12.5367V12.7669C10.6008 12.879 10.5732 13.0295 10.5496 13.1343C10.4999 13.3552 10.6927 13.5271 10.5769 13.7373C10.5769 13.8666 10.5772 13.8409 10.5007 13.9457C10.5007 14.1465 10.4537 14.5693 10.5007 14.7188C10.5333 14.8227 10.9075 15.2632 11.0014 15.3055C11.2277 15.4069 11.5615 15.3851 11.4533 15.7441C10.7909 15.9488 10.3678 15.6285 10.0149 15.6233L9.99833 15.6846C9.77227 15.6849 9.59171 15.6289 9.54252 15.6125C9.54218 15.551 9.61562 15.0793 9.64044 15.0038C9.66596 14.9637 9.69135 14.9234 9.71675 14.8832C9.74422 14.8029 9.68883 14.2139 9.68411 14.0554C9.54287 13.951 9.51529 13.6326 9.51529 13.4578C9.4746 13.3225 9.4746 13.1619 9.46633 12.9862C9.46242 12.9038 9.41369 12.7826 9.4446 12.6791C9.46552 12.6087 9.54471 12.5777 9.56424 12.5202V12.3229C9.6016 12.1152 9.58999 12.0195 9.46633 11.8952C9.15659 11.8992 9.11396 11.9143 8.94375 11.6484C8.89077 11.5659 8.4576 10.8774 8.41565 10.859C8.05512 10.7005 8.12695 10.7621 7.96927 10.4806C7.96284 10.4807 7.86676 10.5129 7.78194 10.6407C7.65311 10.8348 7.42463 11.4658 7.35958 11.6868C7.32315 11.8102 7.35969 11.9466 7.3051 12.0487C7.26557 12.1226 7.13696 12.1464 7.10915 12.1967C6.98284 12.426 7.07743 12.4081 6.83689 12.5695C6.79356 12.6258 6.79229 12.7101 6.76069 12.7779C6.74264 12.8035 6.72437 12.829 6.70633 12.8546C6.66576 12.9421 6.74931 13.1016 6.73345 13.1561C6.69196 13.2998 6.63703 13.4448 6.58106 13.5784C6.47084 13.8418 6.48521 14.1919 6.37407 14.3538C6.31822 14.4353 6.18318 14.3559 6.0802 14.4227C6.07422 14.4793 5.91091 14.8556 5.87884 14.96V15.5576C5.90953 15.6584 5.99389 15.7542 5.96883 15.8817C5.94206 16.0175 5.47315 16.0154 5.21881 15.9785C5.04849 15.9537 4.99735 15.8273 5.0001 15.6811C5.00344 15.5085 5.35006 14.3874 5.32891 14.3131C5.06584 14.015 5.39948 13.7082 5.49774 13.4304C5.54578 13.2948 5.51625 13.1058 5.56854 12.9808C5.66106 12.8109 5.75357 12.6408 5.84621 12.4709C6.01492 12.3103 5.93987 12.3023 6.03124 12.1584C6.11054 12.0335 6.20685 11.9493 6.151 11.7581C6.03883 11.3735 6.2819 10.8282 6.29799 10.4259C6.255 10.3801 6.1087 10.3946 6.09043 10.2718C6.05308 10.022 6.18432 9.57974 6.26535 9.53761C6.30121 9.51897 6.34235 9.53552 6.37419 9.51573C6.37419 9.32822 6.18927 8.28555 6.32971 8.23277C6.41648 8.20025 6.61553 8.183 6.65381 8.16552C6.65151 8.12107 6.62128 8.02627 6.58473 8.02107C6.5229 8.0125 6.39625 7.98843 6.29546 7.96493C5.98619 7.89316 6.27247 6.66414 6.27615 6.65917C6.36131 6.54596 6.75632 6.69875 6.80425 6.50568C6.9363 6.336 6.70242 5.68294 7.15317 4.87906C7.30522 4.60763 7.59668 4.33342 7.93663 4.44964C8.05053 4.48864 7.98145 4.65347 8.18154 4.47707C8.1866 4.37428 8.13914 4.28805 8.11075 4.20298C7.77792 3.20302 8.90559 2.66109 9.69492 3.23254C9.78376 3.26865 9.83536 3.28659 9.90179 3.33671C9.94535 3.56312 10.1681 3.96592 9.94535 4.23029C9.85421 4.24997 9.7425 4.30125 9.6732 4.3509C9.67205 4.44234 9.68365 4.52661 9.70043 4.58124C9.71537 4.63032 9.74376 4.64977 9.67044 4.67986C9.66124 4.68356 9.66515 4.71424 9.67021 4.72581C9.85432 4.76227 10.0509 4.69144 10.1739 4.64155H10.3212V4.45485H10.3914V4.30865H10.4616V4.56133H10.645V4.64155H13.3663V4.7838H13.4866V4.26305H13.5878V4.68657H13.8195V4.92826H14.5398V4.85638H14.6597V4.88798H15V5.08961H14.6597V5.12121H14.5398V5.04922H13.8195V5.12121H13.5021V5.07248H13.3663V5.2189H12.1641Z" fill="#231F20"/>
            </svg>
          </div>
          <div>
            <p class="match-bet-dropdown__time">
              <span>BO3</span>
              <span>01:03:21</span>
            </p>
            <p class="match-bet-dropdown__event f-700">BLAST.tv Paris Major</p>
          </div>
        </div>
        <a href="#" class="match-bet-dropdown__watch">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.5 7C1.5 6.17157 2.17157 5.5 3 5.5H17C17.8284 5.5 18.5 6.17157 18.5 7V17C18.5 17.8284 17.8284 18.5 17 18.5H3C2.17157 18.5 1.5 17.8284 1.5 17V7Z" stroke="#64A0FA"/>
            <path d="M18.5 10.6164C18.5 10.4422 18.5906 10.2806 18.7393 10.1897L21.7393 8.35642C22.0725 8.15281 22.5 8.39259 22.5 8.78306V15.8284C22.5 16.2554 21.9994 16.4859 21.675 16.2083L18.675 13.6417C18.5639 13.5467 18.5 13.4079 18.5 13.2617V10.6164Z" stroke="#64A0FA"/>
          </svg>
        </a>
        <div class="match-bet-dropdown__bet-wrapper">
          <span class="match-bet-dropdown__bet f-700">+ 68</span>
        </div>
        <div class="match-bet-dropdown__team match-bet-dropdown__team--first">
          <div class="match-bet-dropdown__team-icon-wrapper">
            <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic--big.svg'?>" alt="">
          </div>
          <p class="match-bet-dropdown__team-name">Virtus.pro</p>
          <span class="match-bet-dropdown__value f-700">2.50</span>
        </div>
        <div class="match-bet-dropdown__team match-bet-dropdown__team--second">
          <div class="match-bet-dropdown__team-icon-wrapper">
            <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic--big.svg'?>" alt="">
          </div>
          <p class="match-bet-dropdown__team-name">Cloud9</p>
          <span class="match-bet-dropdown__value f-700">2.50</span>
        </div>
        <p class="match-bet-dropdown__vs">
          vs
        </p>
      </div>
    </div>

    <div class="container-md">
      <img src="<?php echo get_template_directory_uri() . '/assets/public/images/video-placeholder.jpg'?>" alt="">
    </div>

    <div class="container-xl">
      <div class="coming-up-wrapper">
        <div class="coming-up-container">
          <div class="coming-up">
            <div class="coming-up__team">
              <div class="coming-up__team-icon-wrapper">
                <img class="" src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/virtus-pro.png'?>" alt="" width="" height="">
              </div>
              <p class="coming-up__team-name f-600">Virtus.pro</p>
            </div>
            <div class="coming-up__info">
              <p class="coming-up__label">Coming up next</p>
              <p class="group">Group B</p>
              <p class="coming-up__separator">vs</p>
              <p class="coming-up__text">Watch live</p>
              <p class="coming-up__date f-800 leading-snug">Wednesday, May 28th<br>13:45</p>
            </div>
            <div class="coming-up__team coming-up__team--reversed">
              <div class="coming-up__team-icon-wrapper coming-up__team-icon-wrapper--reversed">
                <img class="" src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/cloud9.png'?>" alt="" width="" height="">
              </div>
              <p class="coming-up__team-name f-600">Cloud9</p>
            </div>
          </div>
      
          <div class="match-bet-dropdown">
            <div class="match-bet-dropdown__info">
              <div class="match-bet-dropdown__info-icon">  
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="19" height="19" rx="3" fill="#64A0FA"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1641 5.2189C12.1444 5.22886 12.122 5.23858 12.0903 5.2446C11.9491 5.44566 12.0342 5.42216 11.7855 5.59011C11.7859 5.92705 11.7956 5.96328 11.8741 6.2618C11.8759 6.26898 11.8749 6.27581 11.8711 6.28217C11.8672 6.28842 11.8617 6.29247 11.8544 6.29398C11.7943 6.30706 11.7078 6.3294 11.6578 6.33889C11.6593 6.34942 11.6832 6.54029 11.6563 6.68232C11.6141 6.90536 11.0872 7.39336 10.9613 7.41836C10.7871 7.45297 10.5926 7.2981 10.2883 7.1636C10.2044 7.12644 9.92305 6.9402 9.77583 6.89066C9.65354 6.84969 9.53103 7.14925 9.68285 7.22969C9.75353 7.26708 9.86616 7.31743 9.90179 7.41026C10.0073 7.68586 9.88524 8.74832 9.66768 8.96187C9.56448 8.96118 9.47759 8.86569 9.40093 8.89069C9.26405 8.96616 9.35071 9.3876 9.40093 9.46087C10.2431 10.3334 10.143 10.9795 10.5007 11.462C10.6636 11.462 10.5566 11.636 10.6803 11.8403C10.7133 11.9453 10.6708 12.1236 10.6531 12.1913V12.4545C10.644 12.4819 10.6349 12.5092 10.6258 12.5367V12.7669C10.6008 12.879 10.5732 13.0295 10.5496 13.1343C10.4999 13.3552 10.6927 13.5271 10.5769 13.7373C10.5769 13.8666 10.5772 13.8409 10.5007 13.9457C10.5007 14.1465 10.4537 14.5693 10.5007 14.7188C10.5333 14.8227 10.9075 15.2632 11.0014 15.3055C11.2277 15.4069 11.5615 15.3851 11.4533 15.7441C10.7909 15.9488 10.3678 15.6285 10.0149 15.6233L9.99833 15.6846C9.77227 15.6849 9.59171 15.6289 9.54252 15.6125C9.54218 15.551 9.61562 15.0793 9.64044 15.0038C9.66596 14.9637 9.69135 14.9234 9.71675 14.8832C9.74422 14.8029 9.68883 14.2139 9.68411 14.0554C9.54287 13.951 9.51529 13.6326 9.51529 13.4578C9.4746 13.3225 9.4746 13.1619 9.46633 12.9862C9.46242 12.9038 9.41369 12.7826 9.4446 12.6791C9.46552 12.6087 9.54471 12.5777 9.56424 12.5202V12.3229C9.6016 12.1152 9.58999 12.0195 9.46633 11.8952C9.15659 11.8992 9.11396 11.9143 8.94375 11.6484C8.89077 11.5659 8.4576 10.8774 8.41565 10.859C8.05512 10.7005 8.12695 10.7621 7.96927 10.4806C7.96284 10.4807 7.86676 10.5129 7.78194 10.6407C7.65311 10.8348 7.42463 11.4658 7.35958 11.6868C7.32315 11.8102 7.35969 11.9466 7.3051 12.0487C7.26557 12.1226 7.13696 12.1464 7.10915 12.1967C6.98284 12.426 7.07743 12.4081 6.83689 12.5695C6.79356 12.6258 6.79229 12.7101 6.76069 12.7779C6.74264 12.8035 6.72437 12.829 6.70633 12.8546C6.66576 12.9421 6.74931 13.1016 6.73345 13.1561C6.69196 13.2998 6.63703 13.4448 6.58106 13.5784C6.47084 13.8418 6.48521 14.1919 6.37407 14.3538C6.31822 14.4353 6.18318 14.3559 6.0802 14.4227C6.07422 14.4793 5.91091 14.8556 5.87884 14.96V15.5576C5.90953 15.6584 5.99389 15.7542 5.96883 15.8817C5.94206 16.0175 5.47315 16.0154 5.21881 15.9785C5.04849 15.9537 4.99735 15.8273 5.0001 15.6811C5.00344 15.5085 5.35006 14.3874 5.32891 14.3131C5.06584 14.015 5.39948 13.7082 5.49774 13.4304C5.54578 13.2948 5.51625 13.1058 5.56854 12.9808C5.66106 12.8109 5.75357 12.6408 5.84621 12.4709C6.01492 12.3103 5.93987 12.3023 6.03124 12.1584C6.11054 12.0335 6.20685 11.9493 6.151 11.7581C6.03883 11.3735 6.2819 10.8282 6.29799 10.4259C6.255 10.3801 6.1087 10.3946 6.09043 10.2718C6.05308 10.022 6.18432 9.57974 6.26535 9.53761C6.30121 9.51897 6.34235 9.53552 6.37419 9.51573C6.37419 9.32822 6.18927 8.28555 6.32971 8.23277C6.41648 8.20025 6.61553 8.183 6.65381 8.16552C6.65151 8.12107 6.62128 8.02627 6.58473 8.02107C6.5229 8.0125 6.39625 7.98843 6.29546 7.96493C5.98619 7.89316 6.27247 6.66414 6.27615 6.65917C6.36131 6.54596 6.75632 6.69875 6.80425 6.50568C6.9363 6.336 6.70242 5.68294 7.15317 4.87906C7.30522 4.60763 7.59668 4.33342 7.93663 4.44964C8.05053 4.48864 7.98145 4.65347 8.18154 4.47707C8.1866 4.37428 8.13914 4.28805 8.11075 4.20298C7.77792 3.20302 8.90559 2.66109 9.69492 3.23254C9.78376 3.26865 9.83536 3.28659 9.90179 3.33671C9.94535 3.56312 10.1681 3.96592 9.94535 4.23029C9.85421 4.24997 9.7425 4.30125 9.6732 4.3509C9.67205 4.44234 9.68365 4.52661 9.70043 4.58124C9.71537 4.63032 9.74376 4.64977 9.67044 4.67986C9.66124 4.68356 9.66515 4.71424 9.67021 4.72581C9.85432 4.76227 10.0509 4.69144 10.1739 4.64155H10.3212V4.45485H10.3914V4.30865H10.4616V4.56133H10.645V4.64155H13.3663V4.7838H13.4866V4.26305H13.5878V4.68657H13.8195V4.92826H14.5398V4.85638H14.6597V4.88798H15V5.08961H14.6597V5.12121H14.5398V5.04922H13.8195V5.12121H13.5021V5.07248H13.3663V5.2189H12.1641Z" fill="#231F20"/>
                </svg>
              </div>
              <div>
                <p class="match-bet-dropdown__time">
                  <span>BO3</span>
                  <span>01:03:21</span>
                </p>
                <p class="match-bet-dropdown__event f-700">BLAST.tv Paris Major</p>
              </div>
            </div>
            <a href="#" class="match-bet-dropdown__watch">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 7C1.5 6.17157 2.17157 5.5 3 5.5H17C17.8284 5.5 18.5 6.17157 18.5 7V17C18.5 17.8284 17.8284 18.5 17 18.5H3C2.17157 18.5 1.5 17.8284 1.5 17V7Z" stroke="#64A0FA"/>
                <path d="M18.5 10.6164C18.5 10.4422 18.5906 10.2806 18.7393 10.1897L21.7393 8.35642C22.0725 8.15281 22.5 8.39259 22.5 8.78306V15.8284C22.5 16.2554 21.9994 16.4859 21.675 16.2083L18.675 13.6417C18.5639 13.5467 18.5 13.4079 18.5 13.2617V10.6164Z" stroke="#64A0FA"/>
              </svg>
            </a>
            <div class="match-bet-dropdown__bet-wrapper">
              <span class="match-bet-dropdown__bet f-700">+ 68</span>
            </div>
            <div class="match-bet-dropdown__team match-bet-dropdown__team--first">
              <div class="match-bet-dropdown__team-icon-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic--big.svg'?>" alt="">
              </div>
              <p class="match-bet-dropdown__team-name">Virtus.pro</p>
              <span class="match-bet-dropdown__value f-700">2.50</span>
            </div>
            <div class="match-bet-dropdown__team match-bet-dropdown__team--second">
              <div class="match-bet-dropdown__team-icon-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic--big.svg'?>" alt="">
              </div>
              <p class="match-bet-dropdown__team-name">Cloud9</p>
              <span class="match-bet-dropdown__value f-700">2.50</span>
            </div>
            <p class="match-bet-dropdown__vs">
              vs
            </p>
          </div>
          <div class="coming-up__links">
            <a href="/schedule" class="btn-secondary">View schedule</a>
            <a href="#" class="btn-primary">Bet now</a>
          </div>
        </div>
      </div>
    </div>
   
    <div class="deposit-wrapper">
      <div class="deposit">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri() . '/assets/public/images/frontpage/deposit-banner-mobile.jpg'?>">
          <img class="deposit__img" src="<?php echo get_template_directory_uri() . '/assets/public/images/frontpage/deposit-banner-desktop.jpg'?>" alt="" width="1063" height="363">
        </picture>
        <div class="deposit__content">
          <span class="deposit__top f-700">100%</span>
          <p class="deposit__text leading-tight">Deposit Bonus<br /> up to <span>$100</span></p>
          <a href="#" class="btn-primary deposit__btn">Sign Up Now</a>
        </div>
      </div>
    </div>
   
  </div>
</main>
<?php get_footer(); ?>
