<?php
/**
 * Created by PhpStorm.
 * User: iFaizanAhmedK
 * Date: 11-Dec-18
 * Time: 6:08 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <header>
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg  navbar-light bg-light">
            <!-- Image and text -->
            <nav class="navbar">
              <a class="navbar-brand m-0 p-0" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>resources/custom/img/menu.png"
                     class="d-inline-block align-top" alt="">
                <!--              <span class="align-middle">Deal Analytica</span>-->
              </a>
            </nav>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <div class="search-holder">
                    <form class="da-search-form">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <button class="input-group-text da-search fas fa-search" type="button"></button>
                        </div>
                        <input type="text" class="form-control" aria-label="Search" placeholder="Search">
                        <div class="input-group-append">
                          <button class="input-group-text da-search-close fas fa-times" type="button">
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                <!--              <li class="nav-item active">-->
                <!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
                <!--              </li>-->
                <!--              <li class="nav-item">-->
                <!--                <a class="nav-link" href="#">Link</a>-->
                <!--              </li>-->
                <!--              <li class="nav-item dropdown">-->
                <!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"-->
                <!--                   aria-haspopup="true" aria-expanded="false">-->
                <!--                  Dropdown-->
                <!--                </a>-->
                <!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                <!--                  <a class="dropdown-item" href="#">Action</a>-->
                <!--                  <a class="dropdown-item" href="#">Another action</a>-->
                <!--                  <div class="dropdown-divider"></div>-->
                <!--                  <a class="dropdown-item" href="#">Something else here</a>-->
                <!--                </div>-->
                <!--              </li>-->
                <!--              <li class="nav-item">-->
                <!--                <a class="nav-link disabled" href="#">Disabled</a>-->
                <!--              </li>-->
              </ul>
              <div class="form-inline my-2 my-lg-0 m-r-5">
                <!-- Button trigger modal -->
                <button type="button" name="add_project" class="btn btn-green" data-toggle="modal"
                        data-target="#addProjectModalCenter"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Project
                </button>
              </div>
              <div class="form-inline my-2 my-lg-0 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                  <img src="<?php echo base_url(); ?>uploads/img/profile-placeholder.png" class="img-circle" alt="">&nbsp;&nbsp;Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;My Profile</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;Account Settings</a>
                  <div class="dropdown-divider"></div>
                  <button class="dropdown-item" data-toggle="modal" data-target="#logoutModalCenter">
                    <i class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;Logout
                  </button>
                </div>
              </div>
              <!--            <form class="form-inline my-2 my-lg-0">-->
              <!--              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
              <!--              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
              <!--            </form>-->
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
<?php $this->load->view('dashboard/modals/add-project-modal'); ?>
<?php $this->load->view('dashboard/modals/logout-modal'); ?>