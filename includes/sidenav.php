<?php
/**
 * Created by PhpStorm.
 * User: iFaizanAhmedK
 * Date: 11-Dec-18
 * Time: 6:12 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="sidebar">
  <div class="side-head">
    <div class="image-holder">
      <a href="<?php echo base_url(); ?>">
        <img src="<?php echo base_url("resources/custom/img/logo-text.png"); ?>" alt="" class="img-fluid">
      </a>
    </div>
  </div>
  <div class="accordion" id="dealSidebar">
    <div class="card">
      <div class="card-header" id="propOverview">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#collapsePropOverview"
                  aria-expanded="false" aria-controls="propOverview">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Property Overview
          </button>
        </h5>
      </div>
      <div id="collapsePropOverview" class="collapse" aria-labelledby="propOverview" data-parent="#dealSidebar">
        <div class="card-body">
          <div class="card">
            <div class="card-header" id="addPropOverview">
              <h5 class="mb-0">
                <button class="btn btn-black" type="button" data-toggle="collapse"
                        data-target="#collapseAddPropOverview"
                        aria-expanded="false" aria-controls="addPropOverview">
                  <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Add Property
                </button>
              </h5>
            </div>
            <div id="collapseAddPropOverview" class="collapse" aria-labelledby="addPropOverview"
                 data-parent="#propOverview">
              <div class="card-body">
                <h5 class="mb-0 p-l-5">
                  <a href="<?php echo base_url(); ?>add-property" class="btn btn-black prop-details">
                    <i class="far fa-clock"></i>&nbsp;&nbsp;Property Details
                  </a>
                  <br>
                  <button class="btn btn-black prop-sources" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Sources and Uses
                  </button>
                  <br>
                  <button class="btn btn-black prop-equity" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Equity Raise
                  </button>
                  <br>
                  <button class="btn btn-black prop-capital" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Working Capital: Payback Schedule
                  </button>
                </h5>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="propSummary">
              <h5 class="mb-0">
                <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#collapsePropSummary"
                        aria-expanded="false" aria-controls="propSummary">
                  <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Summary of property overview
                </button>
              </h5>
            </div>
            <div id="collapsePropSummary" class="collapse" aria-labelledby="propSummary"
                 data-parent="#propSummary">
              <div class="card-body">
                <h5 class="mb-0 p-l-5">
                  <button class="btn btn-black prop-details" type="button">
                    <i class="far fa-clock"></i>&nbsp;&nbsp;Property Details
                  </button>
                  <br>
                  <button class="btn btn-black prop-sources" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Sources and Uses
                  </button>
                  <br>
                  <button class="btn btn-black prop-equity" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Equity Raise
                  </button>
                  <br>
                  <button class="btn btn-black prop-capital" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Working Capital: Payback Schedule
                  </button>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="historical">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#collapseHistorical"
                  aria-expanded="false" aria-controls="propOverview">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Historical
          </button>
        </h5>
      </div>
      <div id="collapseHistorical" class="collapse" aria-labelledby="historical" data-parent="#dealSidebar">
        <div class="card-body">
          <h5 class="mb-0 p-l-5">
            <button class="btn btn-black add-property" type="button">
              <i class="far fa-clock"></i>&nbsp;&nbsp;Rental Income
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Other Income
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Utilities
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Maintenance and Repairs
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Corporate Units
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Administration
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Office
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Management
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Marketing
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Other Expenses
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Tax and Insurance
            </button>
          </h5>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="trailing">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button"
                  aria-expanded="false" aria-controls="trailing">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;P&L Trailing
          </button>
        </h5>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="rentRoll">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#collapseRentRoll"
                  aria-expanded="false" aria-controls="rentRoll">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Rent Roll
          </button>
        </h5>
      </div>
      <div id="collapseRentRoll" class="collapse" aria-labelledby="rentRoll" data-parent="#dealSidebar">
        <div class="card-body">
          <h5 class="mb-0 p-l-5">
            <button class="btn btn-black add-property" type="button">
              <i class="far fa-clock"></i>&nbsp;&nbsp;Method Selection
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;General Selection
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Rent Roll
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Unit-by-Unit Method
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Rent Premium
            </button>
            <br>
            <button class="btn btn-black prop-summary" type="button">
              <i class="fas fa-route"></i>&nbsp;&nbsp;Rent Roll Inputs
            </button>
          </h5>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="analysis">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#collapseAnalysis"
                  aria-expanded="false" aria-controls="analysis">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Analysis
          </button>
        </h5>
      </div>
      <div id="collapseAnalysis" class="collapse" aria-labelledby="analysis" data-parent="#dealSidebar">
        <div class="card-body">
          <div class="card">
            <div class="card-header" id="addAnalysis">
              <h5 class="mb-0">
                <button class="btn btn-black" type="button" data-toggle="collapse" data-target="#collapseAddAnalysis"
                        aria-expanded="false" aria-controls="addAnalysis">
                  <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Add Analysis
                </button>
              </h5>
            </div>
            <div id="collapseAddAnalysis" class="collapse" aria-labelledby="addAnalysis"
                 data-parent="#analysis">
              <div class="card-body">
                <h5 class="mb-0 p-l-5">
                  <button class="btn btn-black prop-details" type="button">
                    <i class="far fa-clock"></i>&nbsp;&nbsp;Inputs
                  </button>
                  <br>
                  <button class="btn btn-black prop-sources" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Renovation Schedule
                  </button>
                  <br>
                  <button class="btn btn-black prop-equity" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Unit Renovation
                  </button>
                  <br>
                  <button class="btn btn-black prop-capital" type="button">
                    <i class="fas fa-route"></i>&nbsp;&nbsp;Interior Renovation Packages
                  </button>
                </h5>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="analysisSummary">
              <h5 class="mb-0">
                <button class="btn btn-black" type="button" data-toggle="collapse"
                        data-target="#collapseAnalysisSummary"
                        aria-expanded="false" aria-controls="analysisSummary">
                  <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Analysis Summary
                </button>
              </h5>
            </div>
            <div id="collapseAnalysisSummary" class="collapse" aria-labelledby="analysisSummary"
                 data-parent="#analysisSummary">
              <div class="card-body">
                <h5 class="mb-0 p-l-5">
                  <!--                  <button class="btn btn-black prop-details" type="button">-->
                  <!--                    <i class="far fa-clock"></i>&nbsp;&nbsp;Property Details-->
                  <!--                  </button>-->
                  <!--                  <br>-->
                  <!--                  <button class="btn btn-black prop-sources" type="button">-->
                  <!--                    <i class="fas fa-route"></i>&nbsp;&nbsp;Sources and Uses-->
                  <!--                  </button>-->
                  <!--                  <br>-->
                  <!--                  <button class="btn btn-black prop-equity" type="button">-->
                  <!--                    <i class="fas fa-route"></i>&nbsp;&nbsp;Equity Raise-->
                  <!--                  </button>-->
                  <!--                  <br>-->
                  <!--                  <button class="btn btn-black prop-capital" type="button">-->
                  <!--                    <i class="fas fa-route"></i>&nbsp;&nbsp;Working Capital: Payback Schedule-->
                  <!--                  </button>-->
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="assumptions">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button"
                  aria-expanded="false" aria-controls="assumptions">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Assumptions
          </button>
        </h5>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="outputReports">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button"
                  aria-expanded="false" aria-controls="outputReports">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Output & Reports
          </button>
        </h5>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="assetManagement">
        <h5 class="mb-0">
          <button class="btn btn-black" type="button"
                  aria-expanded="false" aria-controls="assetManagement">
            <i class="fas fa-chart-line"></i>&nbsp;&nbsp;Asset Management
          </button>
        </h5>
      </div>
    </div>
  </div>
</div>
