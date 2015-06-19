<?php 

      $addyStreet   = get_field('address_street', 'option');
      $addyCityZip  = get_field('address_city_and_zip', 'option');
      $phone        = get_field('phone', 'option');
      $email        = get_field('email', 'option');

     ?>

    <footer>
      
  			<div class="desktop_footer">
       <div class="navbar navbar-default ">
          <div class="container simple_footer">
            <div class="col-sm-12 text-center navbar-text">
            <ul>
            <?php if(! empty($addyStreet)) : ?>
              <li>
                <?php echo $addyStreet ?>
              </li>
            <?php endif; ?>
            <?php if(! empty($addyCityZip)) : ?>
              <li>
                <?php echo $addyCityZip ?>
              </li>
            <?php endif; ?>
            <?php if(! empty($phone)) : ?>
              <li>
                <?php echo $phone ?>
              </li>
            <?php endif; ?>
            <?php if(! empty($email)) : ?>
              <li>
                <?php echo $email ?>
              </li>
            <?php endif; ?>
            </ul>
          </div>
        </div>   
      </div>   
        </div>

      <div class="mobile_footer container simple_footer">
        <div class="col-sm-12">
          <ul>
          <?php if(! empty($addyStreet)) : ?>
            <li>
              <?php echo $addyStreet ?>
            </li>
          <?php endif; ?>
          <?php if(! empty($addyCityZip)) : ?>
            <li>
              <?php echo $addyCityZip ?>
            </li>
          <?php endif; ?>
          <?php if(! empty($phone)) : ?>
            <li>
              <?php echo $phone ?>
            </li>
          <?php endif; ?>
          <?php if(! empty($email)) : ?>
            <li>
              <?php echo $email ?>
            </li>
          <?php endif; ?>
          </ul>  
        </div>
      </div>

		</footer>
    
