<?php
  /* Template Name: Teams */
?>

<?php get_header();?>

<main>
  <div class="bg-dark">
    <div class="container-sm">
      <div class="teams-top-wrapper">
        <form action="">
          <div class="form-select-wrapper">
            <select name="" id="" class="js-select2 form-select form-select--medium f-500">
              <option value="group_a">Group A</option>
              <option value="group_b">Group B</option>
              <option value="group_c">Group C</option>
            </select>
          </div>
        </form>
        <a href="/standings" class="btn-secondary btn-secondary--smaller">See Group Table</a>
      </div>
      <div class="teams-cards-wrapper">
        <ul>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/cloud9.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">Cloud9</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score f-500">WIN 2:0</span>
                    vs
                    <span class="team-card__result-team f-500">FNATIC</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">FNATIC</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score team-card__result-score--loss f-500">LOSS 0:2</span>
                    vs
                    <span class="team-card__result-team f-500">Cloud9</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/noname.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">NONAME</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score f-500">WIN 2:0</span>
                    vs
                    <span class="team-card__result-team f-500">OUTLAWS</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/virtus-pro.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">Virtus.pro</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score f-500">WIN 2:0</span>
                    vs
                    <span class="team-card__result-team f-500">AgentS</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/outlaws.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">OUTLAWS</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score team-card__result-score--loss f-500">LOSS 0:2</span>
                    vs
                    <span class="team-card__result-team f-500">NONAME</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/agents.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">AgentS</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score team-card__result-score--loss f-500">LOSS 0:2</span>
                    vs
                    <span class="team-card__result-team f-500">Virtus.pro</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/pride.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">PRIDE</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score f-500">WIN 2:0</span>
                    vs
                    <span class="team-card__result-team f-500">BlueJavs</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
          <li class="team-card">
            <div class="team-card__wrapper">
              <div class="team-card__top">
                <div class="team-card__logo-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/bluejavs.png'?>" alt="">
                </div>
                <h2 class="team-card__header f-600">BlueJavs</h2>
              </div>
              <div class="team-card__img-wrapper">
                <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/team-cloud9.png'?>" alt="">
              </div>
              <div class="team-card__result">
                <p class="team-card__result-title">Last match</p>
                <div class="team-card__result-content">
                  <div class="team-card__result-score-wrapper">
                    <span class="team-card__result-score team-card__result-score--loss f-500">LOSS 0:2</span>
                    vs
                    <span class="team-card__result-team f-500">PRIDE</span>
                  </div>
                  <p class="team-card__result-group group">GROUP A</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>

<?php get_footer();?>
