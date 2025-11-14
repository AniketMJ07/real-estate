<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main_content'); ?>
<?php echo $__env->make('widgets.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<div class="pc-container">
    <div class="pc-content"><!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-12">
                <div class="card welcome-banner bg-blue-800">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="p-4">
                                    <h2 class="text-white">Explore Redesigned Able Pro</h2>
                                    <p class="text-white">The Brand new User Interface with power of Bootstrap Components. Explore the Endless possibilities with Able Pro.</p><a href="https://1.envato.market/zNkqj6" class="btn btn-outline-light">Exclusive on Themeforest</a>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="img-welcome-banner"><img src="../assets/images/widget/welcome-banner.png" alt="img" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-primary"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M13 9H7" stroke="#4680FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M22.0002 10.9702V13.0302C22.0002 13.5802 21.5602 14.0302 21.0002 14.0502H19.0402C17.9602 14.0502 16.9702 13.2602 16.8802 12.1802C16.8202 11.5502 17.0602 10.9602 17.4802 10.5502C17.8502 10.1702 18.3602 9.9502 18.9202 9.9502H21.0002C21.5602 9.9702 22.0002 10.4202 22.0002 10.9702Z" stroke="#4680FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M17.48 10.55C17.06 10.96 16.82 11.55 16.88 12.18C16.97 13.26 17.96 14.05 19.04 14.05H21V15.5C21 18.5 19 20.5 16 20.5H7C4 20.5 2 18.5 2 15.5V8.5C2 5.78 3.64 3.88 6.19 3.56C6.45 3.52 6.72 3.5 7 3.5H16C16.26 3.5 16.51 3.50999 16.75 3.54999C19.33 3.84999 21 5.76 21 8.5V9.95001H18.92C18.36 9.95001 17.85 10.17 17.48 10.55Z" stroke="#4680FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">All Earnings</h6>
                            </div>
                            <div class="flex-shrink-0 ms-3">
                                <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-body p-3 mt-3 rounded">
                            <div class="mt-3 row align-items-center">
                                <div class="col-7">
                                    <div id="all-earnings-graph" style="min-height: 50px;">
                                        <div id="apexchartsa1peitxg" class="apexcharts-canvas apexchartsa1peitxg apexcharts-theme-light" style="width: 239px; height: 50px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="239" height="50">
                                                <foreignObject x="0" y="0" width="239" height="50">
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g class="apexcharts-inner apexcharts-graphical" transform="translate(17.38181818181818, 0)">
                                                    <defs>
                                                        <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1007">
                                                            <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaska1peitxg">
                                                            <rect width="208.23636363636365" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaska1peitxg">
                                                            <rect width="243" height="54" x="-19.38181818181818" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaska1peitxg">
                                                            <rect width="204.23636363636365" height="50" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaska1peitxg"></clipPath>
                                                        <clipPath id="nonForecastMaska1peitxg"></clipPath>
                                                    </defs>
                                                    <line x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="url(#SvgjsLinearGradient1007)" filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                    <g class="apexcharts-grid">
                                                        <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="25" x2="221.61818181818182" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="50" x2="221.61818181818182" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                        <line x1="0" y1="50" x2="204.23636363636365" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                    <g class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0">
                                                            <path d="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " pathFrom="M -7.426776859504133 50.001 L -7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L -7.426776859504133 50.001 Z" cy="45" cx="7.426776859504133" j="0" val="10" barHeight="5" barWidth="14.853553719008266"></path>
                                                            <path d="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " pathFrom="M 11.140165289256199 50.001 L 11.140165289256199 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 11.140165289256199 50.001 Z" cy="35" cx="25.993719008264463" j="1" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " pathFrom="M 29.707107438016532 50.001 L 29.707107438016532 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 29.707107438016532 50.001 Z" cy="30" cx="44.560661157024796" j="2" val="40" barHeight="20" barWidth="14.853553719008266"></path>
                                                            <path d="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " pathFrom="M 48.27404958677686 50.001 L 48.27404958677686 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 48.27404958677686 50.001 Z" cy="40" cx="63.12760330578513" j="3" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " pathFrom="M 66.8409917355372 50.001 L 66.8409917355372 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 66.8409917355372 50.001 Z" cy="20" cx="81.69454545454546" j="4" val="60" barHeight="30" barWidth="14.853553719008266"></path>
                                                            <path d="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " pathFrom="M 85.40793388429752 50.001 L 85.40793388429752 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 85.40793388429752 50.001 Z" cy="25" cx="100.26148760330578" j="5" val="50" barHeight="25" barWidth="14.853553719008266"></path>
                                                            <path d="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " pathFrom="M 103.97487603305785 50.001 L 103.97487603305785 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 103.97487603305785 50.001 Z" cy="40" cx="118.82842975206611" j="6" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " pathFrom="M 122.54181818181819 50.001 L 122.54181818181819 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 122.54181818181819 50.001 Z" cy="42.5" cx="137.39537190082646" j="7" val="15" barHeight="7.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " pathFrom="M 141.10876033057852 50.001 L 141.10876033057852 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 141.10876033057852 50.001 Z" cy="40" cx="155.96231404958678" j="8" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " pathFrom="M 159.67570247933884 50.001 L 159.67570247933884 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 159.67570247933884 50.001 Z" cy="37.5" cx="174.5292561983471" j="9" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " pathFrom="M 178.24264462809916 50.001 L 178.24264462809916 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 178.24264462809916 50.001 Z" cy="35" cx="193.09619834710742" j="10" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " fill="rgba(70,128,255,0.85)" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaska1peitxg)" pathTo="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " pathFrom="M 196.8095867768595 50.001 L 196.8095867768595 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 196.8095867768595 50.001 Z" cy="37.5" cx="211.66314049586776" j="11" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <g class="apexcharts-bar-goals-markers">
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaska1peitxg)"></g>
                                                            </g>
                                                            <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                                        </g>
                                                        <g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                    </g>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g class="apexcharts-yaxis-annotations"></g>
                                                    <g class="apexcharts-xaxis-annotations"></g>
                                                    <g class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(70, 128, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-1">$3,020</h5>
                                    <p class="text-primary mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-warning"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 7V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V7C3 4 4.5 2 8 2H16C19.5 2 21 4 21 7Z" stroke="#E58A00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.6" d="M14.5 4.5V6.5C14.5 7.6 15.4 8.5 16.5 8.5H18.5" stroke="#E58A00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.6" d="M8 13H12" stroke="#E58A00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.6" d="M8 17H16" stroke="#E58A00" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Page Views</h6>
                            </div>
                            <div class="flex-shrink-0 ms-3">
                                <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-body p-3 mt-3 rounded">
                            <div class="mt-3 row align-items-center">
                                <div class="col-7">
                                    <div id="page-views-graph" style="min-height: 50px;">
                                        <div id="apexchartsqs2yc6ux" class="apexcharts-canvas apexchartsqs2yc6ux apexcharts-theme-light" style="width: 239px; height: 50px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="239" height="50">
                                                <foreignObject x="0" y="0" width="239" height="50">
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g class="apexcharts-inner apexcharts-graphical" transform="translate(17.38181818181818, 0)">
                                                    <defs>
                                                        <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1008">
                                                            <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskqs2yc6ux">
                                                            <rect width="208.23636363636365" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskqs2yc6ux">
                                                            <rect width="243" height="54" x="-19.38181818181818" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskqs2yc6ux">
                                                            <rect width="204.23636363636365" height="50" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskqs2yc6ux"></clipPath>
                                                        <clipPath id="nonForecastMaskqs2yc6ux"></clipPath>
                                                    </defs>
                                                    <line x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="url(#SvgjsLinearGradient1008)" filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                    <g class="apexcharts-grid">
                                                        <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="25" x2="221.61818181818182" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="50" x2="221.61818181818182" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                        <line x1="0" y1="50" x2="204.23636363636365" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                    <g class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0">
                                                            <path d="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " pathFrom="M -7.426776859504133 50.001 L -7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L -7.426776859504133 50.001 Z" cy="45" cx="7.426776859504133" j="0" val="10" barHeight="5" barWidth="14.853553719008266"></path>
                                                            <path d="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " pathFrom="M 11.140165289256199 50.001 L 11.140165289256199 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 11.140165289256199 50.001 Z" cy="35" cx="25.993719008264463" j="1" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " pathFrom="M 29.707107438016532 50.001 L 29.707107438016532 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 29.707107438016532 50.001 Z" cy="30" cx="44.560661157024796" j="2" val="40" barHeight="20" barWidth="14.853553719008266"></path>
                                                            <path d="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " pathFrom="M 48.27404958677686 50.001 L 48.27404958677686 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 48.27404958677686 50.001 Z" cy="40" cx="63.12760330578513" j="3" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " pathFrom="M 66.8409917355372 50.001 L 66.8409917355372 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 66.8409917355372 50.001 Z" cy="20" cx="81.69454545454546" j="4" val="60" barHeight="30" barWidth="14.853553719008266"></path>
                                                            <path d="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " pathFrom="M 85.40793388429752 50.001 L 85.40793388429752 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 85.40793388429752 50.001 Z" cy="25" cx="100.26148760330578" j="5" val="50" barHeight="25" barWidth="14.853553719008266"></path>
                                                            <path d="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " pathFrom="M 103.97487603305785 50.001 L 103.97487603305785 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 103.97487603305785 50.001 Z" cy="40" cx="118.82842975206611" j="6" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " pathFrom="M 122.54181818181819 50.001 L 122.54181818181819 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 122.54181818181819 50.001 Z" cy="42.5" cx="137.39537190082646" j="7" val="15" barHeight="7.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " pathFrom="M 141.10876033057852 50.001 L 141.10876033057852 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 141.10876033057852 50.001 Z" cy="40" cx="155.96231404958678" j="8" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " pathFrom="M 159.67570247933884 50.001 L 159.67570247933884 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 159.67570247933884 50.001 Z" cy="37.5" cx="174.5292561983471" j="9" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " pathFrom="M 178.24264462809916 50.001 L 178.24264462809916 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 178.24264462809916 50.001 Z" cy="35" cx="193.09619834710742" j="10" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " fill="rgba(229,138,0,0.85)" fill-opacity="1" stroke="#e58a00" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskqs2yc6ux)" pathTo="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " pathFrom="M 196.8095867768595 50.001 L 196.8095867768595 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 196.8095867768595 50.001 Z" cy="37.5" cx="211.66314049586776" j="11" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <g class="apexcharts-bar-goals-markers">
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqs2yc6ux)"></g>
                                                            </g>
                                                            <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                                        </g>
                                                        <g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                    </g>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g class="apexcharts-yaxis-annotations"></g>
                                                    <g class="apexcharts-xaxis-annotations"></g>
                                                    <g class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(229, 138, 0);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-1">290K+</h5>
                                    <p class="text-warning mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M16 2V5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M3.5 9.08984H20.5" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="#2ca87f" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M15.6947 13.7002H15.7037" stroke="#2ca87f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M15.6947 16.7002H15.7037" stroke="#2ca87f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M11.9955 13.7002H12.0045" stroke="#2ca87f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M11.9955 16.7002H12.0045" stroke="#2ca87f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M8.29431 13.7002H8.30329" stroke="#2ca87f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M8.29395 16.7002H8.30293" stroke="#2ca87f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Total Task</h6>
                            </div>
                            <div class="flex-shrink-0 ms-3">
                                <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-body p-3 mt-3 rounded">
                            <div class="mt-3 row align-items-center">
                                <div class="col-7">
                                    <div id="total-task-graph" style="min-height: 50px;">
                                        <div id="apexchartskmwzb9cq" class="apexcharts-canvas apexchartskmwzb9cq apexcharts-theme-light" style="width: 239px; height: 50px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="239" height="50">
                                                <foreignObject x="0" y="0" width="239" height="50">
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g class="apexcharts-inner apexcharts-graphical" transform="translate(17.38181818181818, 0)">
                                                    <defs>
                                                        <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1009">
                                                            <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskkmwzb9cq">
                                                            <rect width="208.23636363636365" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskkmwzb9cq">
                                                            <rect width="243" height="54" x="-19.38181818181818" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskkmwzb9cq">
                                                            <rect width="204.23636363636365" height="50" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskkmwzb9cq"></clipPath>
                                                        <clipPath id="nonForecastMaskkmwzb9cq"></clipPath>
                                                    </defs>
                                                    <line x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="url(#SvgjsLinearGradient1009)" filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                    <g class="apexcharts-grid">
                                                        <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="25" x2="221.61818181818182" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="50" x2="221.61818181818182" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                        <line x1="0" y1="50" x2="204.23636363636365" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                    <g class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0">
                                                            <path d="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " pathFrom="M -7.426776859504133 50.001 L -7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L -7.426776859504133 50.001 Z" cy="45" cx="7.426776859504133" j="0" val="10" barHeight="5" barWidth="14.853553719008266"></path>
                                                            <path d="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " pathFrom="M 11.140165289256199 50.001 L 11.140165289256199 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 11.140165289256199 50.001 Z" cy="35" cx="25.993719008264463" j="1" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " pathFrom="M 29.707107438016532 50.001 L 29.707107438016532 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 29.707107438016532 50.001 Z" cy="30" cx="44.560661157024796" j="2" val="40" barHeight="20" barWidth="14.853553719008266"></path>
                                                            <path d="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " pathFrom="M 48.27404958677686 50.001 L 48.27404958677686 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 48.27404958677686 50.001 Z" cy="40" cx="63.12760330578513" j="3" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " pathFrom="M 66.8409917355372 50.001 L 66.8409917355372 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 66.8409917355372 50.001 Z" cy="20" cx="81.69454545454546" j="4" val="60" barHeight="30" barWidth="14.853553719008266"></path>
                                                            <path d="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " pathFrom="M 85.40793388429752 50.001 L 85.40793388429752 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 85.40793388429752 50.001 Z" cy="25" cx="100.26148760330578" j="5" val="50" barHeight="25" barWidth="14.853553719008266"></path>
                                                            <path d="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " pathFrom="M 103.97487603305785 50.001 L 103.97487603305785 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 103.97487603305785 50.001 Z" cy="40" cx="118.82842975206611" j="6" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " pathFrom="M 122.54181818181819 50.001 L 122.54181818181819 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 122.54181818181819 50.001 Z" cy="42.5" cx="137.39537190082646" j="7" val="15" barHeight="7.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " pathFrom="M 141.10876033057852 50.001 L 141.10876033057852 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 141.10876033057852 50.001 Z" cy="40" cx="155.96231404958678" j="8" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " pathFrom="M 159.67570247933884 50.001 L 159.67570247933884 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 159.67570247933884 50.001 Z" cy="37.5" cx="174.5292561983471" j="9" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " pathFrom="M 178.24264462809916 50.001 L 178.24264462809916 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 178.24264462809916 50.001 Z" cy="35" cx="193.09619834710742" j="10" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " fill="rgba(44,168,127,0.85)" fill-opacity="1" stroke="#2ca87f" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskkmwzb9cq)" pathTo="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " pathFrom="M 196.8095867768595 50.001 L 196.8095867768595 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 196.8095867768595 50.001 Z" cy="37.5" cx="211.66314049586776" j="11" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <g class="apexcharts-bar-goals-markers">
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskkmwzb9cq)"></g>
                                                            </g>
                                                            <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                                        </g>
                                                        <g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                    </g>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g class="apexcharts-yaxis-annotations"></g>
                                                    <g class="apexcharts-xaxis-annotations"></g>
                                                    <g class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(44, 168, 127);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-1">839</h5>
                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> New</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-danger"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#DC2626" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path opacity="0.4" d="M8.4707 10.7402L12.0007 14.2602L15.5307 10.7402" stroke="#DC2626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Download</h6>
                            </div>
                            <div class="flex-shrink-0 ms-3">
                                <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-body p-3 mt-3 rounded">
                            <div class="mt-3 row align-items-center">
                                <div class="col-7">
                                    <div id="download-graph" style="min-height: 50px;">
                                        <div id="apexchartsxqiua594" class="apexcharts-canvas apexchartsxqiua594 apexcharts-theme-light" style="width: 239px; height: 50px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="239" height="50">
                                                <foreignObject x="0" y="0" width="239" height="50">
                                                    <style type="text/css">
                                                        .apexcharts-flip-y {
                                                            transform: scaleY(-1) translateY(-100%);
                                                            transform-origin: top;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-flip-x {
                                                            transform: scaleX(-1);
                                                            transform-origin: center;
                                                            transform-box: fill-box;
                                                        }

                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                            flex-direction: column;
                                                        }

                                                        .apexcharts-legend-group {
                                                            display: flex;
                                                        }

                                                        .apexcharts-legend-group-vertical {
                                                            flex-direction: column-reverse;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                            align-items: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                            align-items: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                <g class="apexcharts-inner apexcharts-graphical" transform="translate(17.38181818181818, 0)">
                                                    <defs>
                                                        <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1010">
                                                            <stop stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                            <stop stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMaskxqiua594">
                                                            <rect width="208.23636363636365" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectBarMaskxqiua594">
                                                            <rect width="243" height="54" x="-19.38181818181818" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskxqiua594">
                                                            <rect width="204.23636363636365" height="50" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskxqiua594"></clipPath>
                                                        <clipPath id="nonForecastMaskxqiua594"></clipPath>
                                                    </defs>
                                                    <line x1="0" y1="0" x2="0" y2="50" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="50" fill="url(#SvgjsLinearGradient1010)" filter="none" fill-opacity="0.9" stroke-width="0"></line>
                                                    <g class="apexcharts-grid">
                                                        <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                            <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="25" x2="221.61818181818182" y2="25" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            <line x1="-17.38181818181818" y1="50" x2="221.61818181818182" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                        <line x1="0" y1="50" x2="204.23636363636365" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                    <g class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g class="apexcharts-series" rel="1" seriesName="series-1" data:realIndex="0">
                                                            <path d="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M -7.426776859504133 48.001 L -7.426776859504133 47.001 C -7.426776859504133 46.001 -6.426776859504133 45.001 -5.426776859504133 45.001 L 5.426776859504133 45.001 C 6.426776859504133 45.001 7.426776859504133 46.001 7.426776859504133 47.001 L 7.426776859504133 48.001 C 7.426776859504133 49.001 6.426776859504133 50.001 5.426776859504133 50.001 L -5.426776859504133 50.001 C -6.426776859504133 50.001 -7.426776859504133 49.001 -7.426776859504133 48.001 Z " pathFrom="M -7.426776859504133 50.001 L -7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L 7.426776859504133 50.001 L -7.426776859504133 50.001 Z" cy="45" cx="7.426776859504133" j="0" val="10" barHeight="5" barWidth="14.853553719008266"></path>
                                                            <path d="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 11.140165289256199 48.001 L 11.140165289256199 37.001 C 11.140165289256199 36.001 12.140165289256199 35.001 13.140165289256199 35.001 L 23.993719008264463 35.001 C 24.993719008264463 35.001 25.993719008264463 36.001 25.993719008264463 37.001 L 25.993719008264463 48.001 C 25.993719008264463 49.001 24.993719008264463 50.001 23.993719008264463 50.001 L 13.140165289256199 50.001 C 12.140165289256199 50.001 11.140165289256199 49.001 11.140165289256199 48.001 Z " pathFrom="M 11.140165289256199 50.001 L 11.140165289256199 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 25.993719008264463 50.001 L 11.140165289256199 50.001 Z" cy="35" cx="25.993719008264463" j="1" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 29.707107438016532 48.001 L 29.707107438016532 32.001000000000005 C 29.707107438016532 31.001000000000005 30.707107438016532 30.001 31.707107438016532 30.001 L 42.560661157024796 30.001 C 43.560661157024796 30.001 44.560661157024796 31.001000000000005 44.560661157024796 32.001000000000005 L 44.560661157024796 48.001 C 44.560661157024796 49.001 43.560661157024796 50.001 42.560661157024796 50.001 L 31.707107438016532 50.001 C 30.707107438016532 50.001 29.707107438016532 49.001 29.707107438016532 48.001 Z " pathFrom="M 29.707107438016532 50.001 L 29.707107438016532 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 44.560661157024796 50.001 L 29.707107438016532 50.001 Z" cy="30" cx="44.560661157024796" j="2" val="40" barHeight="20" barWidth="14.853553719008266"></path>
                                                            <path d="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 48.27404958677686 48.001 L 48.27404958677686 42.001 C 48.27404958677686 41.001 49.27404958677686 40.001 50.27404958677686 40.001 L 61.12760330578513 40.001 C 62.12760330578513 40.001 63.12760330578513 41.001 63.12760330578513 42.001 L 63.12760330578513 48.001 C 63.12760330578513 49.001 62.12760330578513 50.001 61.12760330578513 50.001 L 50.27404958677686 50.001 C 49.27404958677686 50.001 48.27404958677686 49.001 48.27404958677686 48.001 Z " pathFrom="M 48.27404958677686 50.001 L 48.27404958677686 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 63.12760330578513 50.001 L 48.27404958677686 50.001 Z" cy="40" cx="63.12760330578513" j="3" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 66.8409917355372 48.001 L 66.8409917355372 22.001 C 66.8409917355372 21.001 67.8409917355372 20.001 68.8409917355372 20.001 L 79.69454545454546 20.001 C 80.69454545454546 20.001 81.69454545454546 21.001 81.69454545454546 22.001 L 81.69454545454546 48.001 C 81.69454545454546 49.001 80.69454545454546 50.001 79.69454545454546 50.001 L 68.8409917355372 50.001 C 67.8409917355372 50.001 66.8409917355372 49.001 66.8409917355372 48.001 Z " pathFrom="M 66.8409917355372 50.001 L 66.8409917355372 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 81.69454545454546 50.001 L 66.8409917355372 50.001 Z" cy="20" cx="81.69454545454546" j="4" val="60" barHeight="30" barWidth="14.853553719008266"></path>
                                                            <path d="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 85.40793388429752 48.001 L 85.40793388429752 27.001 C 85.40793388429752 26.001 86.40793388429752 25.001 87.40793388429752 25.001 L 98.26148760330578 25.001 C 99.26148760330578 25.001 100.26148760330578 26.001 100.26148760330578 27.001 L 100.26148760330578 48.001 C 100.26148760330578 49.001 99.26148760330578 50.001 98.26148760330578 50.001 L 87.40793388429752 50.001 C 86.40793388429752 50.001 85.40793388429752 49.001 85.40793388429752 48.001 Z " pathFrom="M 85.40793388429752 50.001 L 85.40793388429752 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 100.26148760330578 50.001 L 85.40793388429752 50.001 Z" cy="25" cx="100.26148760330578" j="5" val="50" barHeight="25" barWidth="14.853553719008266"></path>
                                                            <path d="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 103.97487603305785 48.001 L 103.97487603305785 42.001 C 103.97487603305785 41.001 104.97487603305785 40.001 105.97487603305785 40.001 L 116.82842975206611 40.001 C 117.82842975206611 40.001 118.82842975206611 41.001 118.82842975206611 42.001 L 118.82842975206611 48.001 C 118.82842975206611 49.001 117.82842975206611 50.001 116.82842975206611 50.001 L 105.97487603305785 50.001 C 104.97487603305785 50.001 103.97487603305785 49.001 103.97487603305785 48.001 Z " pathFrom="M 103.97487603305785 50.001 L 103.97487603305785 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 118.82842975206611 50.001 L 103.97487603305785 50.001 Z" cy="40" cx="118.82842975206611" j="6" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 122.54181818181819 48.001 L 122.54181818181819 44.501 C 122.54181818181819 43.501 123.54181818181819 42.501 124.54181818181819 42.501 L 135.39537190082646 42.501 C 136.39537190082646 42.501 137.39537190082646 43.501 137.39537190082646 44.501 L 137.39537190082646 48.001 C 137.39537190082646 49.001 136.39537190082646 50.001 135.39537190082646 50.001 L 124.54181818181819 50.001 C 123.54181818181819 50.001 122.54181818181819 49.001 122.54181818181819 48.001 Z " pathFrom="M 122.54181818181819 50.001 L 122.54181818181819 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 137.39537190082646 50.001 L 122.54181818181819 50.001 Z" cy="42.5" cx="137.39537190082646" j="7" val="15" barHeight="7.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 141.10876033057852 48.001 L 141.10876033057852 42.001 C 141.10876033057852 41.001 142.10876033057852 40.001 143.10876033057852 40.001 L 153.96231404958678 40.001 C 154.96231404958678 40.001 155.96231404958678 41.001 155.96231404958678 42.001 L 155.96231404958678 48.001 C 155.96231404958678 49.001 154.96231404958678 50.001 153.96231404958678 50.001 L 143.10876033057852 50.001 C 142.10876033057852 50.001 141.10876033057852 49.001 141.10876033057852 48.001 Z " pathFrom="M 141.10876033057852 50.001 L 141.10876033057852 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 155.96231404958678 50.001 L 141.10876033057852 50.001 Z" cy="40" cx="155.96231404958678" j="8" val="20" barHeight="10" barWidth="14.853553719008266"></path>
                                                            <path d="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 159.67570247933884 48.001 L 159.67570247933884 39.501 C 159.67570247933884 38.501 160.67570247933884 37.501 161.67570247933884 37.501 L 172.5292561983471 37.501 C 173.5292561983471 37.501 174.5292561983471 38.501 174.5292561983471 39.501 L 174.5292561983471 48.001 C 174.5292561983471 49.001 173.5292561983471 50.001 172.5292561983471 50.001 L 161.67570247933884 50.001 C 160.67570247933884 50.001 159.67570247933884 49.001 159.67570247933884 48.001 Z " pathFrom="M 159.67570247933884 50.001 L 159.67570247933884 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 174.5292561983471 50.001 L 159.67570247933884 50.001 Z" cy="37.5" cx="174.5292561983471" j="9" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <path d="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 178.24264462809916 48.001 L 178.24264462809916 37.001 C 178.24264462809916 36.001 179.24264462809916 35.001 180.24264462809916 35.001 L 191.09619834710742 35.001 C 192.09619834710742 35.001 193.09619834710742 36.001 193.09619834710742 37.001 L 193.09619834710742 48.001 C 193.09619834710742 49.001 192.09619834710742 50.001 191.09619834710742 50.001 L 180.24264462809916 50.001 C 179.24264462809916 50.001 178.24264462809916 49.001 178.24264462809916 48.001 Z " pathFrom="M 178.24264462809916 50.001 L 178.24264462809916 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 193.09619834710742 50.001 L 178.24264462809916 50.001 Z" cy="35" cx="193.09619834710742" j="10" val="30" barHeight="15" barWidth="14.853553719008266"></path>
                                                            <path d="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " fill="rgba(220,38,38,0.85)" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskxqiua594)" pathTo="M 196.8095867768595 48.001 L 196.8095867768595 39.501 C 196.8095867768595 38.501 197.8095867768595 37.501 198.8095867768595 37.501 L 209.66314049586776 37.501 C 210.66314049586776 37.501 211.66314049586776 38.501 211.66314049586776 39.501 L 211.66314049586776 48.001 C 211.66314049586776 49.001 210.66314049586776 50.001 209.66314049586776 50.001 L 198.8095867768595 50.001 C 197.8095867768595 50.001 196.8095867768595 49.001 196.8095867768595 48.001 Z " pathFrom="M 196.8095867768595 50.001 L 196.8095867768595 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 211.66314049586776 50.001 L 196.8095867768595 50.001 Z" cy="37.5" cx="211.66314049586776" j="11" val="25" barHeight="12.5" barWidth="14.853553719008266"></path>
                                                            <g class="apexcharts-bar-goals-markers">
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                                <g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxqiua594)"></g>
                                                            </g>
                                                            <g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g>
                                                        </g>
                                                        <g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g>
                                                    </g>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line x1="-17.38181818181818" y1="0" x2="221.61818181818182" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                        <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g class="apexcharts-yaxis-annotations"></g>
                                                    <g class="apexcharts-xaxis-annotations"></g>
                                                    <g class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(220, 38, 38);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <h5 class="mb-1">2,067</h5>
                                    <p class="text-danger mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="flex-grow-1">
                                <h5 class="mb-0">Repeat customer rate</h5>
                            </div>
                            <div class="flex-shrink-0 ms-3">
                                <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots f-18"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-end my-2">5.44% <span class="badge bg-success">+2.6%</span></h5>
                        <div id="customer-rate-graph" style="min-height: 245px;">
                            <div id="apexcharts6q0yvop8" class="apexcharts-canvas apexcharts6q0yvop8 apexcharts-theme-light" style="width: 459px; height: 230px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="459" height="230">
                                    <foreignObject x="0" y="0" width="459" height="230">
                                        <style type="text/css">
                                            .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                            }

                                            .apexcharts-legend-group {
                                                display: flex;
                                            }

                                            .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-yaxis" rel="0" transform="translate(9.2421875, 0)">
                                        <g class="apexcharts-yaxis-texts-g"><text x="20" y="33.666666666666664" text-anchor="end" dominant-baseline="auto" font-size="11px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan>90</tspan>
                                                <title>90</title>
                                            </text><text x="20" y="60.724666666666664" text-anchor="end" dominant-baseline="auto" font-size="11px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan>80</tspan>
                                                <title>80</title>
                                            </text><text x="20" y="87.78266666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan>70</tspan>
                                                <title>70</title>
                                            </text><text x="20" y="114.84066666666668" text-anchor="end" dominant-baseline="auto" font-size="11px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan>60</tspan>
                                                <title>60</title>
                                            </text><text x="20" y="141.89866666666668" text-anchor="end" dominant-baseline="auto" font-size="11px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan>50</tspan>
                                                <title>50</title>
                                            </text><text x="20" y="168.95666666666668" text-anchor="end" dominant-baseline="auto" font-size="11px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan>40</tspan>
                                                <title>40</title>
                                            </text><text x="20" y="196.01466666666667" text-anchor="end" dominant-baseline="auto" font-size="11px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan>30</tspan>
                                                <title>30</title>
                                            </text></g>
                                    </g>
                                    <g class="apexcharts-inner apexcharts-graphical" transform="translate(39.2421875, 30)">
                                        <defs>
                                            <clipPath id="gridRectMask6q0yvop8">
                                                <rect width="403.0859375" height="167.348" x="-2.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectBarMask6q0yvop8">
                                                <rect width="403.0859375" height="167.348" x="-2.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask6q0yvop8">
                                                <rect width="398.0859375" height="162.348" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask6q0yvop8"></clipPath>
                                            <clipPath id="nonForecastMask6q0yvop8"></clipPath>
                                            <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1011">
                                                <stop stop-opacity="0.5" stop-color="rgba(13,110,253,0.5)" offset="0"></stop>
                                                <stop stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                <stop stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line x1="0" y1="0" x2="0" y2="162.348" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="162.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g class="apexcharts-grid">
                                            <g class="apexcharts-gridlines-horizontal">
                                                <line x1="0" y1="27.058000000000003" x2="398.0859375" y2="27.058000000000003" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="0" y1="54.11600000000001" x2="398.0859375" y2="54.11600000000001" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="0" y1="81.174" x2="398.0859375" y2="81.174" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="0" y1="108.23200000000001" x2="398.0859375" y2="108.23200000000001" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line x1="0" y1="135.29000000000002" x2="398.0859375" y2="135.29000000000002" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g class="apexcharts-gridlines-vertical"></g>
                                            <line x1="0" y1="162.348" x2="398.0859375" y2="162.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line x1="0" y1="1" x2="0" y2="162.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g class="apexcharts-grid-borders">
                                            <line x1="0" y1="0" x2="398.0859375" y2="0" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line x1="0" y1="162.348" x2="398.0859375" y2="162.348" stroke="#e0e0e0" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g class="apexcharts-area-series apexcharts-plot-series">
                                            <g class="apexcharts-series" zIndex="0" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path d="M 0 162.348C 12.666370738636362 162.348 23.52325994318182 81.174 36.18963068181818 81.174C 48.85600142045454 81.174 59.712890625 135.29000000000002 72.37926136363636 135.29000000000002C 85.04563210227272 135.29000000000002 95.90252130681819 54.116000000000014 108.56889204545455 54.116000000000014C 121.2352627840909 54.116000000000014 132.09215198863637 108.232 144.75852272727272 108.232C 157.4248934659091 108.232 168.28178267045453 0 180.9481534090909 0C 193.61452414772728 0 204.47141335227272 108.232 217.1377840909091 108.232C 229.80415482954544 108.232 240.6610440340909 94.703 253.32741477272725 94.703C 265.9937855113636 94.703 276.85067471590907 121.76100000000001 289.51704545454544 121.76100000000001C 302.1834161931818 121.76100000000001 313.04030539772725 81.174 325.7066761363636 81.174C 338.373046875 81.174 349.22993607954544 108.232 361.8963068181818 108.232C 374.5626775568182 108.232 385.4195667613636 67.64500000000001 398.0859375 67.64500000000001C 398.0859375 67.64500000000001 398.0859375 67.64500000000001 398.0859375 162.348 L 0 162.348z" fill="url(#SvgjsLinearGradient1011)" fill-opacity="1" stroke="none" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6q0yvop8)" pathTo="M 0 162.348C 12.666370738636362 162.348 23.52325994318182 81.174 36.18963068181818 81.174C 48.85600142045454 81.174 59.712890625 135.29000000000002 72.37926136363636 135.29000000000002C 85.04563210227272 135.29000000000002 95.90252130681819 54.116000000000014 108.56889204545455 54.116000000000014C 121.2352627840909 54.116000000000014 132.09215198863637 108.232 144.75852272727272 108.232C 157.4248934659091 108.232 168.28178267045453 0 180.9481534090909 0C 193.61452414772728 0 204.47141335227272 108.232 217.1377840909091 108.232C 229.80415482954544 108.232 240.6610440340909 94.703 253.32741477272725 94.703C 265.9937855113636 94.703 276.85067471590907 121.76100000000001 289.51704545454544 121.76100000000001C 302.1834161931818 121.76100000000001 313.04030539772725 81.174 325.7066761363636 81.174C 338.373046875 81.174 349.22993607954544 108.232 361.8963068181818 108.232C 374.5626775568182 108.232 385.4195667613636 67.64500000000001 398.0859375 67.64500000000001C 398.0859375 67.64500000000001 398.0859375 67.64500000000001 398.0859375 162.348 L 0 162.348z" pathFrom="M 0 162.348 L 0 162.348 L 36.18963068181818 162.348 L 72.37926136363636 162.348 L 108.56889204545455 162.348 L 144.75852272727272 162.348 L 180.9481534090909 162.348 L 217.1377840909091 162.348 L 253.32741477272725 162.348 L 289.51704545454544 162.348 L 325.7066761363636 162.348 L 361.8963068181818 162.348 L 398.0859375 162.348z"></path>
                                                <path d="M 0 162.348C 12.666370738636362 162.348 23.52325994318182 81.174 36.18963068181818 81.174C 48.85600142045454 81.174 59.712890625 135.29000000000002 72.37926136363636 135.29000000000002C 85.04563210227272 135.29000000000002 95.90252130681819 54.116000000000014 108.56889204545455 54.116000000000014C 121.2352627840909 54.116000000000014 132.09215198863637 108.232 144.75852272727272 108.232C 157.4248934659091 108.232 168.28178267045453 0 180.9481534090909 0C 193.61452414772728 0 204.47141335227272 108.232 217.1377840909091 108.232C 229.80415482954544 108.232 240.6610440340909 94.703 253.32741477272725 94.703C 265.9937855113636 94.703 276.85067471590907 121.76100000000001 289.51704545454544 121.76100000000001C 302.1834161931818 121.76100000000001 313.04030539772725 81.174 325.7066761363636 81.174C 338.373046875 81.174 349.22993607954544 108.232 361.8963068181818 108.232C 374.5626775568182 108.232 385.4195667613636 67.64500000000001 398.0859375 67.64500000000001" fill="none" fill-opacity="1" stroke="#0d6efd" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask6q0yvop8)" pathTo="M 0 162.348C 12.666370738636362 162.348 23.52325994318182 81.174 36.18963068181818 81.174C 48.85600142045454 81.174 59.712890625 135.29000000000002 72.37926136363636 135.29000000000002C 85.04563210227272 135.29000000000002 95.90252130681819 54.116000000000014 108.56889204545455 54.116000000000014C 121.2352627840909 54.116000000000014 132.09215198863637 108.232 144.75852272727272 108.232C 157.4248934659091 108.232 168.28178267045453 0 180.9481534090909 0C 193.61452414772728 0 204.47141335227272 108.232 217.1377840909091 108.232C 229.80415482954544 108.232 240.6610440340909 94.703 253.32741477272725 94.703C 265.9937855113636 94.703 276.85067471590907 121.76100000000001 289.51704545454544 121.76100000000001C 302.1834161931818 121.76100000000001 313.04030539772725 81.174 325.7066761363636 81.174C 338.373046875 81.174 349.22993607954544 108.232 361.8963068181818 108.232C 374.5626775568182 108.232 385.4195667613636 67.64500000000001 398.0859375 67.64500000000001" pathFrom="M 0 162.348 L 0 162.348 L 36.18963068181818 162.348 L 72.37926136363636 162.348 L 108.56889204545455 162.348 L 144.75852272727272 162.348 L 180.9481534090909 162.348 L 217.1377840909091 162.348 L 253.32741477272725 162.348 L 289.51704545454544 162.348 L 325.7066761363636 162.348 L 361.8963068181818 162.348 L 398.0859375 162.348" fill-rule="evenodd"></path>
                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <path d="M 0, 0 
           m -0, 0 
           a 0,0 0 1,0 0,0 
           a 0,0 0 1,0 -0,0" fill="#0d6efd" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-marker w0mz9iuzh no-pointer-events" default-marker-size="0"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line x1="0" y1="0" x2="398.0859375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line x1="0" y1="0" x2="398.0859375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text x="0" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text x="36.18963068181817" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text x="72.37926136363635" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text x="108.56889204545453" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text x="144.75852272727272" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>May</tspan>
                                                    <title>May</title>
                                                </text><text x="180.9481534090909" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text x="217.1377840909091" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Jul</tspan>
                                                    <title>Jul</title>
                                                </text><text x="253.32741477272728" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Aug</tspan>
                                                    <title>Aug</title>
                                                </text><text x="289.5170454545455" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Sep</tspan>
                                                    <title>Sep</title>
                                                </text><text x="325.7066761363637" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Oct</tspan>
                                                    <title>Oct</title>
                                                </text><text x="361.89630681818187" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Nov</tspan>
                                                    <title>Nov</title>
                                                </text><text x="398.08593750000006" y="190.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-family="Helvetica, Arial, sans-serif" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan>Dec</tspan>
                                                    <title>Dec</title>
                                                </text></g>
                                        </g>
                                        <g class="apexcharts-yaxis-annotations"></g>
                                        <g class="apexcharts-xaxis-annotations"></g>
                                        <g class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 115px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(13, 110, 253);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Project - Able Pro</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <p class="mb-2">Release v1.2.0<span class="float-end">70%</span></p>
                            <div class="progress progress-primary" style="height: 8px">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="d-grid gap-2"><a href="#" class="btn btn-link-secondary">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><span class="p-1 d-block bg-warning rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                    <div class="flex-grow-1 mx-2">
                                        <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Horizontal Layout</span></p>
                                    </div>
                                    <div class="badge bg-light-secondary f-12"><i class="ti ti-paperclip text-sm"></i> 2</div>
                                </div>
                            </a><a href="#" class="btn btn-link-secondary">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><span class="p-1 d-block bg-warning rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                    <div class="flex-grow-1 mx-2">
                                        <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Invoice Generator</span></p>
                                    </div>
                                </div>
                            </a><a href="#" class="btn btn-link-secondary">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><span class="p-1 d-block bg-warning rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                    <div class="flex-grow-1 mx-2">
                                        <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Package Upgrades</span></p>
                                    </div>
                                </div>
                            </a><a href="#" class="btn btn-link-secondary">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0"><span class="p-1 d-block bg-success rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                    <div class="flex-grow-1 mx-2">
                                        <p class="mb-0 d-grid text-start"><span class="text-truncate w-100">Figma Auto Layout</span></p>
                                    </div>
                                </div>
                            </a></div>
                        <div class="d-grid mt-3"><button class="btn btn-primary d-flex align-items-center justify-content-center gap-2"><i class="ti ti-plus"></i> Add task</button></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Project overview</h5>
                            <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots f-18"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-3 row align-items-center">
                                    <div class="col-6">
                                        <p class="text-muted mb-1">Total Tasks</p>
                                        <h5 class="mb-0">34,686</h5>
                                    </div>
                                    <div class="col-6">
                                        <div id="total-tasks-graph" style="min-height: 60px;">
                                            <div id="apexcharts194to1ws" class="apexcharts-canvas apexcharts194to1ws apexcharts-theme-light" style="width: 218px; height: 60px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="218" height="60">
                                                    <foreignObject x="0" y="0" width="218" height="60">
                                                        <style type="text/css">
                                                            .apexcharts-flip-y {
                                                                transform: scaleY(-1) translateY(-100%);
                                                                transform-origin: top;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-flip-x {
                                                                transform: scaleX(-1);
                                                                transform-origin: center;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                                flex-direction: column;
                                                            }

                                                            .apexcharts-legend-group {
                                                                display: flex;
                                                            }

                                                            .apexcharts-legend-group-vertical {
                                                                flex-direction: column-reverse;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                                align-items: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                                align-items: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                cursor: pointer;
                                                                margin-right: 1px;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                        <defs>
                                                            <clipPath id="gridRectMask194to1ws">
                                                                <rect width="224" height="64" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMask194to1ws">
                                                                <rect width="224" height="64" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask194to1ws">
                                                                <rect width="218" height="58" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask194to1ws"></clipPath>
                                                            <clipPath id="nonForecastMask194to1ws"></clipPath>
                                                            <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1012">
                                                                <stop stop-opacity="0.5" stop-color="rgba(70,128,255,0.5)" offset="0"></stop>
                                                                <stop stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                                <stop stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line x1="0" y1="0" x2="0" y2="58" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="58" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g class="apexcharts-grid">
                                                            <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line x1="0" y1="0" x2="218" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="29" x2="218" y2="29" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="58" x2="218" y2="58" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line x1="0" y1="58" x2="218" y2="58" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line x1="0" y1="1" x2="0" y2="58" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                        <g class="apexcharts-area-series apexcharts-plot-series">
                                                            <g class="apexcharts-series" zIndex="0" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path d="M 0 55.1C 12.716666666666665 55.1 23.616666666666664 43.5 36.33333333333333 43.5C 49.05 43.5 59.94999999999999 56.26 72.66666666666666 56.26C 85.38333333333333 56.26 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 55.68 145.33333333333331 55.68C 158.04999999999998 55.68 168.95 28.999999999999996 181.66666666666666 28.999999999999996C 194.38333333333333 28.999999999999996 205.28333333333333 58 218 58C 218 58 218 58 218 58 L 0 58z" fill="url(#SvgjsLinearGradient1012)" fill-opacity="1" stroke="none" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask194to1ws)" pathTo="M 0 55.1C 12.716666666666665 55.1 23.616666666666664 43.5 36.33333333333333 43.5C 49.05 43.5 59.94999999999999 56.26 72.66666666666666 56.26C 85.38333333333333 56.26 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 55.68 145.33333333333331 55.68C 158.04999999999998 55.68 168.95 28.999999999999996 181.66666666666666 28.999999999999996C 194.38333333333333 28.999999999999996 205.28333333333333 58 218 58C 218 58 218 58 218 58 L 0 58z" pathFrom="M 0 58 L 0 58 L 36.33333333333333 58 L 72.66666666666666 58 L 109 58 L 145.33333333333331 58 L 181.66666666666666 58 L 218 58z"></path>
                                                                <path d="M 0 55.1C 12.716666666666665 55.1 23.616666666666664 43.5 36.33333333333333 43.5C 49.05 43.5 59.94999999999999 56.26 72.66666666666666 56.26C 85.38333333333333 56.26 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 55.68 145.33333333333331 55.68C 158.04999999999998 55.68 168.95 28.999999999999996 181.66666666666666 28.999999999999996C 194.38333333333333 28.999999999999996 205.28333333333333 58 218 58" fill="none" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask194to1ws)" pathTo="M 0 55.1C 12.716666666666665 55.1 23.616666666666664 43.5 36.33333333333333 43.5C 49.05 43.5 59.94999999999999 56.26 72.66666666666666 56.26C 85.38333333333333 56.26 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 55.68 145.33333333333331 55.68C 158.04999999999998 55.68 168.95 28.999999999999996 181.66666666666666 28.999999999999996C 194.38333333333333 28.999999999999996 205.28333333333333 58 218 58" pathFrom="M 0 58 L 0 58 L 36.33333333333333 58 L 72.66666666666666 58 L 109 58 L 145.33333333333331 58 L 181.66666666666666 58 L 218 58" fill-rule="evenodd"></path>
                                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <path d="M 0, 0 
           m -0, 0 
           a 0,0 0 1,0 0,0 
           a 0,0 0 1,0 -0,0" fill="#4680ff" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-marker wfwkbsqee no-pointer-events" default-marker-size="0"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line x1="0" y1="0" x2="218" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line x1="0" y1="0" x2="218" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g class="apexcharts-yaxis-annotations"></g>
                                                        <g class="apexcharts-xaxis-annotations"></g>
                                                        <g class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(70, 128, 255);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-3 row align-items-center">
                                    <div class="col-6">
                                        <p class="text-muted mb-1">Pending Tasks</p>
                                        <h5 class="mb-0">3,786</h5>
                                    </div>
                                    <div class="col-6">
                                        <div id="pending-tasks-graph" style="min-height: 60px;">
                                            <div id="apexchartsev1a7f5s" class="apexcharts-canvas apexchartsev1a7f5s apexcharts-theme-light" style="width: 218px; height: 60px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="218" height="60">
                                                    <foreignObject x="0" y="0" width="218" height="60">
                                                        <style type="text/css">
                                                            .apexcharts-flip-y {
                                                                transform: scaleY(-1) translateY(-100%);
                                                                transform-origin: top;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-flip-x {
                                                                transform: scaleX(-1);
                                                                transform-origin: center;
                                                                transform-box: fill-box;
                                                            }

                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                                flex-direction: column;
                                                            }

                                                            .apexcharts-legend-group {
                                                                display: flex;
                                                            }

                                                            .apexcharts-legend-group-vertical {
                                                                flex-direction: column-reverse;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                                align-items: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                                align-items: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                cursor: pointer;
                                                                margin-right: 1px;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <rect width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                                    <g class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g>
                                                    <g class="apexcharts-inner apexcharts-graphical" transform="translate(0, 1)">
                                                        <defs>
                                                            <clipPath id="gridRectMaskev1a7f5s">
                                                                <rect width="224" height="64" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectBarMaskev1a7f5s">
                                                                <rect width="224" height="64" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMaskev1a7f5s">
                                                                <rect width="218" height="58" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMaskev1a7f5s"></clipPath>
                                                            <clipPath id="nonForecastMaskev1a7f5s"></clipPath>
                                                            <linearGradient x1="0" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1013">
                                                                <stop stop-opacity="0.5" stop-color="rgba(220,38,38,0.5)" offset="0"></stop>
                                                                <stop stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                                <stop stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                        <line x1="0" y1="0" x2="0" y2="58" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="58" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                        <g class="apexcharts-grid">
                                                            <g class="apexcharts-gridlines-horizontal" style="display: none;">
                                                                <line x1="0" y1="0" x2="218" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="29" x2="218" y2="29" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                                <line x1="0" y1="58" x2="218" y2="58" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                                            <line x1="0" y1="58" x2="218" y2="58" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                            <line x1="0" y1="1" x2="0" y2="58" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        </g>
                                                        <g class="apexcharts-grid-borders" style="display: none;"></g>
                                                        <g class="apexcharts-area-series apexcharts-plot-series">
                                                            <g class="apexcharts-series" zIndex="0" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                                <path d="M 0 58C 12.716666666666665 58 23.616666666666664 28.999999999999996 36.33333333333333 28.999999999999996C 49.05 28.999999999999996 59.94999999999999 55.68 72.66666666666666 55.68C 85.38333333333333 55.68 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 56.26 145.33333333333331 56.26C 158.04999999999998 56.26 168.95 43.5 181.66666666666666 43.5C 194.38333333333333 43.5 205.28333333333333 55.1 218 55.1C 218 55.1 218 55.1 218 58 L 0 58z" fill="url(#SvgjsLinearGradient1013)" fill-opacity="1" stroke="none" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskev1a7f5s)" pathTo="M 0 58C 12.716666666666665 58 23.616666666666664 28.999999999999996 36.33333333333333 28.999999999999996C 49.05 28.999999999999996 59.94999999999999 55.68 72.66666666666666 55.68C 85.38333333333333 55.68 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 56.26 145.33333333333331 56.26C 158.04999999999998 56.26 168.95 43.5 181.66666666666666 43.5C 194.38333333333333 43.5 205.28333333333333 55.1 218 55.1C 218 55.1 218 55.1 218 58 L 0 58z" pathFrom="M 0 58 L 0 58 L 36.33333333333333 58 L 72.66666666666666 58 L 109 58 L 145.33333333333331 58 L 181.66666666666666 58 L 218 58z"></path>
                                                                <path d="M 0 58C 12.716666666666665 58 23.616666666666664 28.999999999999996 36.33333333333333 28.999999999999996C 49.05 28.999999999999996 59.94999999999999 55.68 72.66666666666666 55.68C 85.38333333333333 55.68 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 56.26 145.33333333333331 56.26C 158.04999999999998 56.26 168.95 43.5 181.66666666666666 43.5C 194.38333333333333 43.5 205.28333333333333 55.1 218 55.1" fill="none" fill-opacity="1" stroke="#dc2626" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskev1a7f5s)" pathTo="M 0 58C 12.716666666666665 58 23.616666666666664 28.999999999999996 36.33333333333333 28.999999999999996C 49.05 28.999999999999996 59.94999999999999 55.68 72.66666666666666 55.68C 85.38333333333333 55.68 96.28333333333333 52.2 109 52.2C 121.71666666666665 52.2 132.61666666666665 56.26 145.33333333333331 56.26C 158.04999999999998 56.26 168.95 43.5 181.66666666666666 43.5C 194.38333333333333 43.5 205.28333333333333 55.1 218 55.1" pathFrom="M 0 58 L 0 58 L 36.33333333333333 58 L 72.66666666666666 58 L 109 58 L 145.33333333333331 58 L 181.66666666666666 58 L 218 58" fill-rule="evenodd"></path>
                                                                <g class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <path d="M 0, 0 
           m -0, 0 
           a 0,0 0 1,0 0,0 
           a 0,0 0 1,0 -0,0" fill="#dc2626" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-marker wwk2q7ik1 no-pointer-events" default-marker-size="0"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g class="apexcharts-datalabels" data:realIndex="0"></g>
                                                        </g>
                                                        <line x1="0" y1="0" x2="218" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line x1="0" y1="0" x2="218" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g class="apexcharts-xaxis" transform="translate(0, 0)">
                                                            <g class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g class="apexcharts-yaxis-annotations"></g>
                                                        <g class="apexcharts-xaxis-annotations"></g>
                                                        <g class="apexcharts-point-annotations"></g>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 30px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: rgb(220, 38, 38);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-3 d-grid"><button class="btn btn-primary d-flex align-items-center justify-content-center gap-2"><i class="ti ti-plus"></i> Add project</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-s bg-light-primary"><i class="ti ti-at f-20"></i></div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Able pro</h6><small class="text-muted">@ableprodevelop</small>
                            </div>
                            <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-4">
                            <div class="user-group able-user-group"><img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar"> <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="avtar"> <img src="../assets/images/user/avatar-4.jpg" alt="user-image" class="avtar"> <img src="../assets/images/user/avatar-5.jpg" alt="user-image" class="avtar"> <span class="avtar bg-light-primary text-primary text-sm">+2</span></div><a href="#" class="avtar avtar-s btn btn-primary rounded-circle"><i class="ti ti-plus f-20"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body border-bottom pb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Transactions</h5>
                            <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs analytics-tab" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="analytics-tab-1" data-bs-toggle="tab" data-bs-target="#analytics-tab-1-pane" type="button" role="tab" aria-controls="analytics-tab-1-pane" aria-selected="true">All Transaction</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="analytics-tab-2" data-bs-toggle="tab" data-bs-target="#analytics-tab-2-pane" type="button" role="tab" aria-controls="analytics-tab-2-pane" aria-selected="false" tabindex="-1">Success</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="analytics-tab-3" data-bs-toggle="tab" data-bs-target="#analytics-tab-3-pane" type="button" role="tab" aria-controls="analytics-tab-3-pane" aria-selected="false" tabindex="-1">Pending</button></li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="analytics-tab-1-pane" role="tabpanel" aria-labelledby="analytics-tab-1" tabindex="0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border">AI</div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Apple Inc.</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">$210,000</h6>
                                                    <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Spotify Music</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">- 10,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>MD</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Medium</h6>
                                                    <p class="text-muted mb-0"><small>06:30 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">-26</h6>
                                                    <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Uber</h6>
                                                    <p class="text-muted mb-0"><small>08:40 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>OC</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Ola Cabs</h6>
                                                    <p class="text-muted mb-0"><small>07:40 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="analytics-tab-2-pane" role="tabpanel" aria-labelledby="analytics-tab-2" tabindex="0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Uber</h6>
                                                    <p class="text-muted mb-0"><small>08:40 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>OC</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Ola Cabs</h6>
                                                    <p class="text-muted mb-0"><small>07:40 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border">AI</div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Apple Inc.</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">$210,000</h6>
                                                    <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Spotify Music</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">- 10,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>MD</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Medium</h6>
                                                    <p class="text-muted mb-0"><small>06:30 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">-26</h6>
                                                    <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="analytics-tab-3-pane" role="tabpanel" aria-labelledby="analytics-tab-3" tabindex="0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="10,000 Tracks"><span>SM</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Spotify Music</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T10232</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">- 10,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 30.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border bg-light-primary" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>MD</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Medium</h6>
                                                    <p class="text-muted mb-0"><small>06:30 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">-26</h6>
                                                    <p class="text-warning mb-0"><i class="ti ti-arrows-left-right"></i> 5%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>U</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Uber</h6>
                                                    <p class="text-muted mb-0"><small>08:40 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border">AI</div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Apple Inc.</h6>
                                                    <p class="text-muted mb-0"><small>#ABLE-PRO-T00232</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">$210,000</h6>
                                                    <p class="text-danger mb-0"><i class="ti ti-arrow-down-left"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="avtar avtar-s border bg-light-warning" data-bs-toggle="tooltip" data-bs-title="143 Posts"><span>OC</span></div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-1">
                                                <div class="col-6">
                                                    <h6 class="mb-0">Ola Cabs</h6>
                                                    <p class="text-muted mb-0"><small>07:40 pm</small></p>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <h6 class="mb-1">+210,000</h6>
                                                    <p class="text-success mb-0"><i class="ti ti-arrow-up-right"></i> 10.6%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="d-grid"><button class="btn btn-outline-secondary d-grid"><span class="text-truncate w-100">View all Transaction History</span></button></div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-grid"><button class="btn btn-primary d-grid"><span class="text-truncate w-100">Create new Transaction</span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Total Income</h5>
                            <div class="dropdown"><a class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Today</a> <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a></div>
                            </div>
                        </div>
                        <div id="total-income-graph" style="min-height: 253px;">
                            <div id="apexcharts0lw13kn" class="apexcharts-canvas apexcharts0lw13kn apexcharts-theme-light" style="width: 459px; height: 253px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="459" height="253">
                                    <foreignObject x="0" y="0" width="459" height="253">
                                        <style type="text/css">
                                            .apexcharts-flip-y {
                                                transform: scaleY(-1) translateY(-100%);
                                                transform-origin: top;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-flip-x {
                                                transform: scaleX(-1);
                                                transform-origin: center;
                                                transform-box: fill-box;
                                            }

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apexcharts-legend-group-horizontal {
                                                flex-direction: column;
                                            }

                                            .apexcharts-legend-group {
                                                display: flex;
                                            }

                                            .apexcharts-legend-group-vertical {
                                                flex-direction: column-reverse;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                                align-items: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                                align-items: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                                align-items: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                cursor: pointer;
                                                margin-right: 1px;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g class="apexcharts-inner apexcharts-graphical" transform="translate(104.5, 0)">
                                        <defs>
                                            <clipPath id="gridRectMask0lw13kn">
                                                <rect width="256" height="256" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectBarMask0lw13kn">
                                                <rect width="256" height="256" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask0lw13kn">
                                                <rect width="250" height="250" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask0lw13kn"></clipPath>
                                            <clipPath id="nonForecastMask0lw13kn"></clipPath>
                                        </defs>
                                        <g class="apexcharts-pie">
                                            <g transform="translate(0, 0) scale(1)">
                                                <circle r="75.36829268292684" cx="125" cy="125" fill="transparent"></circle>
                                                <g class="apexcharts-slices">
                                                    <g class="apexcharts-series apexcharts-pie-series" seriesName="Totalxincome" rel="1" data:realIndex="0">
                                                        <path d="M 125 9.048780487804862 A 115.95121951219514 115.95121951219514 0 0 1 232.7159835611958 167.91797049965737 L 195.01538931477728 152.8966808247773 A 75.36829268292684 75.36829268292684 0 0 0 125 49.631707317073165 L 125 9.048780487804862 z " fill="rgba(70,128,255,1)" fill-opacity="1 1 1 0.3" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="111.72413793103448" data:startAngle="0" data:strokeWidth="2" data:value="27" data:pathOrig="M 125 9.048780487804862 A 115.95121951219514 115.95121951219514 0 0 1 232.7159835611958 167.91797049965737 L 195.01538931477728 152.8966808247773 A 75.36829268292684 75.36829268292684 0 0 0 125 49.631707317073165 L 125 9.048780487804862 z "></path>
                                                    </g>
                                                    <g class="apexcharts-series apexcharts-pie-series" seriesName="Totalxrent" rel="2" data:realIndex="1">
                                                        <path d="M 232.7159835611958 167.91797049965737 A 115.95121951219514 115.95121951219514 0 0 1 72.54586710378523 228.40816819029095 L 90.9048136174604 192.2153093236891 A 75.36829268292684 75.36829268292684 0 0 0 195.01538931477728 152.8966808247773 L 232.7159835611958 167.91797049965737 z " fill="rgba(229,138,0,1)" fill-opacity="1 1 1 0.3" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="95.17241379310343" data:startAngle="111.72413793103448" data:strokeWidth="2" data:value="23" data:pathOrig="M 232.7159835611958 167.91797049965737 A 115.95121951219514 115.95121951219514 0 0 1 72.54586710378523 228.40816819029095 L 90.9048136174604 192.2153093236891 A 75.36829268292684 75.36829268292684 0 0 0 195.01538931477728 152.8966808247773 L 232.7159835611958 167.91797049965737 z "></path>
                                                    </g>
                                                    <g class="apexcharts-series apexcharts-pie-series" seriesName="Download" rel="3" data:realIndex="2">
                                                        <path d="M 72.54586710378523 228.40816819029095 A 115.95121951219514 115.95121951219514 0 0 1 15.80479467912437 85.99881487317242 L 54.02311654143085 99.64922966756208 A 75.36829268292684 75.36829268292684 0 0 0 90.9048136174604 192.2153093236891 L 72.54586710378523 228.40816819029095 z " fill="rgba(44,168,127,1)" fill-opacity="1 1 1 0.3" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="82.75862068965517" data:startAngle="206.8965517241379" data:strokeWidth="2" data:value="20" data:pathOrig="M 72.54586710378523 228.40816819029095 A 115.95121951219514 115.95121951219514 0 0 1 15.80479467912437 85.99881487317242 L 54.02311654143085 99.64922966756208 A 75.36829268292684 75.36829268292684 0 0 0 90.9048136174604 192.2153093236891 L 72.54586710378523 228.40816819029095 z "></path>
                                                    </g>
                                                    <g class="apexcharts-series apexcharts-pie-series" seriesName="Views" rel="4" data:realIndex="3">
                                                        <path d="M 15.80479467912437 85.99881487317242 A 115.95121951219514 115.95121951219514 0 0 1 124.97976269458081 9.048782253842916 L 124.98684575147753 49.6317084649979 A 75.36829268292684 75.36829268292684 0 0 0 54.02311654143085 99.64922966756208 L 15.80479467912437 85.99881487317242 z " fill="rgba(70,128,255,0.3)" fill-opacity="1 1 1 0.3" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="70.34482758620692" data:startAngle="289.6551724137931" data:strokeWidth="2" data:value="17" data:pathOrig="M 15.80479467912437 85.99881487317242 A 115.95121951219514 115.95121951219514 0 0 1 124.97976269458081 9.048782253842916 L 124.98684575147753 49.6317084649979 A 75.36829268292684 75.36829268292684 0 0 0 54.02311654143085 99.64922966756208 L 15.80479467912437 85.99881487317242 z "></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line x1="0" y1="0" x2="250" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line x1="0" y1="0" x2="250" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                    <g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="background-color: rgb(70, 128, 255);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1" style="order: 2;"><span class="apexcharts-tooltip-marker" shape="circle" style="background-color: rgb(229, 138, 0);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-2" style="order: 3;"><span class="apexcharts-tooltip-marker" shape="circle" style="background-color: rgb(44, 168, 127);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-3" style="order: 4;"><span class="apexcharts-tooltip-marker" shape="circle" style="background-color: rgb(70, 128, 255);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 mt-3">
                            <div class="col-sm-6">
                                <div class="bg-body p-3 rounded">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0"><span class="p-1 d-block bg-primary rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0">Income</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="bg-body p-3 rounded">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0"><span class="p-1 d-block bg-warning rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0">Rent</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="bg-body p-3 rounded">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0"><span class="p-1 d-block bg-success rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0">Download</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="bg-body p-3 rounded">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0"><span class="p-1 d-block bg-light-primary rounded-circle"><span class="visually-hidden">New alerts</span></span></div>
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0">Views</p>
                                        </div>
                                    </div>
                                    <h6 class="mb-0">$23,876 <small class="text-muted"><i class="ti ti-chevrons-up"></i> +$763,43</small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- [ Main Content ] end -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/plugins/apexcharts.min.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Volumes/wd_work/github/ableprolaravel/resources/views/admin/dashboard/index.blade.php ENDPATH**/ ?>