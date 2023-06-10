<?php
  /* Template Name: Standings */
?>

<?php get_header();?>

<main>
  <div class="standings-page-wrapper bg-dark">
      <div class="buttons-wrapper">
        <button type="button" class="btn-tertiary active">GROUP ROUND</button>
        <button type="button" class="btn-tertiary">PLAY OFFS ROUND</button>
      </div>
        <div class="container-xs standings-tabs-wrapper">
          <div class="standings-team-sort-wrapper">
            <form action="">
              <div class="form-select-wrapper">
                <select name="" id="" class="js-select2 form-select form-select--large f-500">
                  <option value="group_a">Group A</option>
                  <option value="group_b">Group B</option>
                  <option value="group_c">Group C</option>
                </select>
              </div>
            </form>
            <div class="standings-team-buttons-wrapper tabs">
              <button type="button" class="tab active" data-tab="tab1">Table</button>
              <button type="button" class="tab" data-tab="tab2">Grid View</button>
            </div>
          </div>
          <div id="tab1" class="tab-content">
            <ul class="standings-team-wrapper">
              <li class="standing-team standing-team--heading">
                <span class="f-500">R.</span>
                <span>Team</span>
                <span></span>
                <span>Wins</span>
                <span>Losses</span>
              </li>
              <li class="standing-team">
                <span class="f-500">1.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/cloud9.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">Cloud9</p>
                <span class="standing-team__score standing-team__score--win f-800">11</span>
                <span class="standing-team__score standing-team__score--loss f-800">5</span>
              </li>
              <li class="standing-team">
                <span class="f-500">2.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/noname.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">NONAME</p>
                <span class="standing-team__score standing-team__score--win f-800">10</span>
                <span class="standing-team__score standing-team__score--loss f-800">6</span>
              </li>
              <li class="standing-team">
                <span class="f-500">3.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/bluejavs.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">NONAME</p>
                <span class="standing-team__score standing-team__score--win f-800">9</span>
                <span class="standing-team__score standing-team__score--loss f-800">7</span>
              </li>
              <li class="standing-team">
                <span class="f-500">4.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/virtus-pro.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">Viruts.pro</p>
                <span class="standing-team__score standing-team__score--win f-800">9</span>
                <span class="standing-team__score standing-team__score--loss f-800">7</span>
              </li>
              <li class="standing-team">
                <span class="f-500">5.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/outlaws.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">OUTLAWS</p>
                <span class="standing-team__score standing-team__score--win f-800">8</span>
                <span class="standing-team__score standing-team__score--loss f-800">8</span>
              </li>
              <li class="standing-team">
                <span class="f-500">6.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/agents.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">AgentS</p>
                <span class="standing-team__score standing-team__score--win f-800">6</span>
                <span class="standing-team__score standing-team__score--loss f-800">10</span>
              </li>
              <li class="standing-team">
                <span class="f-500">7.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/pride.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">PRIDE</p>
                <span class="standing-team__score standing-team__score--win f-800">5</span>
                <span class="standing-team__score standing-team__score--loss f-800">11</span>
              </li>
              <li class="standing-team">
                <span class="f-500">8.</span>
                <div class="standing-team__img-wrapper">
                  <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/dust2-master.png'?>" alt="">
                </div>
                <p class="standing-team__name f-500">DUST2 Master</p>
                <span class="standing-team__score standing-team__score--win f-800">3</span>
                <span class="standing-team__score standing-team__score--loss f-800">13</span>
              </li>
            </ul>
          </div>
          <div id="tab2" class="tab-content">
            <ul class="standings-team-wrapper">
              <li class="standing-team-grid standing-team-grid--heading">
                <span class="f-500">Grid view</span>
              </li>
              <li class="standing-team-grid">
                <span></span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/noname.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/virtus-pro.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/outlaws.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/agents.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/pride.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/dust2-master.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/bluejavs.png'?>" alt="">
                  </div>
                </span>
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/cloud9.png'?>" alt="">
                  </div>
                </span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/fnatic.png'?>" alt="">
                  </div>
                </span>
                <span></span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/noname.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span></span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/virtus-pro.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span>1:0</span>
                <span></span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/outlaws.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span></span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/agents.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span></span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/pride.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span></span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/dust2-master.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span></span>
                <span>1:0</span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/bluejavs.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span></span>
                <span>1:0</span>
              </li>
              <li class="standing-team-grid">
                <span>
                  <div class="standing-team__img-wrapper">
                    <img src="<?php echo get_template_directory_uri() . '/assets/public/images/teams/cloud9.png'?>" alt="">
                  </div>
                </span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span>1:0</span>
                <span></span>
              </li>
            </ul>
          </div>
        </div>
  </div>
</main>

<?php get_footer();?>
