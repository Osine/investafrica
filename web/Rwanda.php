<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rwanda | Doing Business in Africa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/rwanda.css">
    <script type="text/javascript">
        function openMetric(evt, metric) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(metric).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</head>

<?php include_once("header_city.php"); ?>

<body>
    <div class="content">
    <div class="title">
        <table>
            <tr>
                <td>
            <h1>Rwanda</h1>
            <h3>Population: 12 Million</h3>
            <h3>GDP per Capita: 791.3 USD</h3>
            <h4>Major cities: Kigali, Butare, Gitarama</h4>
    </td>
    <td>
    <img class="flag" src="images/flag_rwanda.png" />
    </td>
    </tr>
    </table>
            <div class="investnow">
                <a href="https://www.visitrwanda.com/investment/how-to-invest/starting-a-business/">
                    <button class="ctabusiness">Start a Business</button>
                </a>
            </div>
        </div>
 
        <div class="attributes">
            <div class="tabs" style="width: 70px">
                <ul>
                    <button id="security" class="tablinks" onclick="openMetric(event, 'security_details')">Security</button>
                    <button class="tablinks" onclick="openMetric(event, 'legal_details')">Legal</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'governance_details')"> Governance </button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'property_details')"> Property </button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'transport_details')">Transport Infrastructure</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'utility_details')">Utility Infrastructure </button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'ict_details')">ICT Adoption</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'marcoeconomic_details')"> Marcoeconomic stability</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'health_details')">Health</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'currentwork_details')">Current Workforce</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'futurework_details')">Future Workforce</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'domesticcomp_details')">Domestic Competition</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'trade_details')">Trade</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'flexibility_details')"> Flexibility </button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'incentives_details')"> Meritocracy and Incentivization </button>
                    <button href="" class="tablinks" onclick="openMetric(event, 'financial_details')">Financial</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'marketsize_details')">Market Size</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'admin_details')">Administrative Requirements</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'culture_details')">Entrepreneurial Culture</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'interaction_details')">Interaction and Diversity</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'randd_details')">Research and Development</button>
                    <button href=" " class="tablinks" onclick="openMetric(event, 'commerce_details')">Commercialization</button>
                </ul>
            </div>
        </div>

        <div id="stats" class="stats">
            <div class="environment">
                <div class="institutions">
                    <div id="security_details" class="tabcontent" style="display: none;">
                        <!-- <h2>Security</h2> -->
                        <h3>Organized Crime</h3>
                        <p>5.1 out of 7</p>
                        <h3>Reliablility of Police Services</h3>
                        <p>5.6 out of 7</p>
                        <h3>Terrorism Incidence</h3>
                        <p>99.7 (very low / barely any incidence)</p>
                    </div>

                    <div id="legal_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Legal</h2> -->
                        <h3>Judicial independence: </h3>
                        <p>4.7 out of 7</p>
                        <h3>Efficiency of legal framework in challenging regulations</h3>
                        <p>4.3 out of 7</p>
                        <h3>Efficiency of legal framework in settling disputes</h3>
                        <p>5.0 out 7</p>
                        <h3>Legal framework's adaptability to digital business models</h3>
                        <p>4.7 out 7</p>
                    </div>

                    <div id="governance_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Governance</h2> -->
                        <h3>Burden of government regulation</h3>
                        <p>4.7 out 7</p>
                        <h3>Budget transparency</h3>
                        <p>22 out of 100</p>
                        <h3>Judicial independence</h3>
                        <p>4.7 out 7</p>
                        <h3>Freedom of the press</h3>
                        <p>52.4 out of 100</p>
                        <h3>E-Participation</h3>
                        <p>75.8 out of 100</p>
                        <h3>Government ensuring policy stability</h3>
                        <p>5.4 out of 7)</p>
                        <h3>Government's responsiveness to change</h3>
                        <p>5.4 out of 7</p>
                        <h3>Government long-term vision</h3>
                        <p>5.8 out of 7</p>
                        <h3>Energy efficiency regulation</h3>
                        <p>27.6 out of 100</p>
                        <h3>Renewable energy regulation</h3>
                        <p>50.1 out of 100</p>
                        <h3>Environment-related treaties in force</h3>
                        <p>18 out of 29</p>
                    </div>

                    <div id="property_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Property</h2> -->
                        <h3>Property rights</h3>
                        <p>5.0 out of 7</p>
                        <h3>Intellectual property protection</h3>
                        <p>4.7 out of 7</p>
                        <h3>Quality of land administration</h3>
                        <p>28.5 out of 30</p>
                    </div>

                    <div id="coporate_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Coporate Governance</h2> -->
                        <h3>Strength of auditing and accounting standards</h3>
                        <p>4.7 out of 7</p>
                        <h3>Conflict of interest regulation</h3>
                        <p>7.3 out of 10</p>
                        <h3>Shareholder governance</h3>
                        <p>8.0 out of 10</p>
                    </div>
                </div>
                <div class="infrastructure ">

                    <diV id="transport_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Transport Infrastructure</h2> -->
                        <h3>Road Connectivity</h3>
                        <p>46.6 out of 100</p>
                        <h3>Quality of Road Infrastructure</h3>
                        <p>4.8 out of 7</p>
                        <h3>Railroad Density</h3>
                        <p>N/A</p>
                        <h3>Efficiency of Train Services</h3>
                        <p>N/A</p>
                        <h3>Airport Connectivity</h3>
                        <p>19.8 out of 100</p>
                        <h3>Efficiency of Air Transport Services</h3>
                        <p>5.0 out of 7</p>
                        <h3>Liner Shipping Connectivity</h3>
                        <p>N/A</p>
                        <h3>Efficiency of Seaport Services</h3>
                        <p>3.2 of 7</p>
                    </diV>

                    <div id="utility_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Utility Infrastructure</h2> -->
                        <h3>Electricity Access (% of Population)</h3>
                        <p>42.7% of the population</p>
                        <h3>Electricity Supply Quality</h3>
                        <p>N/A</p>
                        <h3>Exposure to unsafe drinking water</h3>
                        <p>61.6% of the population</p>
                        <h3>Reliablility of water supply</h3>
                        <p>4.2 out 7</p>
                    </div>
                </div>
                <div class="ictadoption ">

                    <div id="ict_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>ICT Adoption</h2> -->
                        <h3>Mobile-celluar telephone subscriptions</h3>
                        <p>65.7 out of 100</p>
                        <h3>Mobile Broadband Subscribers</h3>
                        <p>39.0 per 100 population</p>
                        <h3>Fixed-Broadband Internet Subscribers</h3>
                        <p>0.1 per 100 population</p>
                        <h3>Fibre Internet subscriptions</h3>
                        <p>0.0 per 100 population</p>
                        <h3>Internet Users</h3>
                        <p>21.8% of adult population</p>
                    </div>
                </div>
                <div class="marcoeconomicstability ">

                    <div id="marcoeconomic_details" class="tabcontent" style="display: none;">
                        <!-- <h2>Marcoeconomic stability</h2> -->
                        <h3>Inflation</h3>
                        <p>3.1%</p>
                        <h3>Debt Dynamics</h3>
                        <p>45.3 out of 100</p>
                    </div>
                </div>
            </div>
            <div class="peoplecapital ">
                <div class="health">

                    <div id="health_details" class="tabcontent" style="display: none;">
                        <!-- <h2>Health</h2> -->
                        <h3>Healthy Life Expectancy</h3>
                        <p>59.6 years</p>
                    </div>
                </div>
                <div class="skills">
                    <div id="currentwork_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Current Workforce</h2> -->
                        <h3>Mean years of schooling</h3>
                        <p>4.0 years</p>
                        <h3>Extent of staff training</h3>
                        <p>3.8 out of 7</p>
                        <h3>Quality of vocational training</h3>
                        <p>4.0 out of 7</p>
                        <h3>Skillset of graduates</h3>
                        <p>3.8 out of 7</p>
                        <h3>Digital skills among active population</h3>
                        <p>4.0 out of 7</p>
                        <h3>Ease of finding skilled employees</h3>
                        <p>4.1 out of 7</p>
                    </div>

                    <div id="futurework_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Future Workforce</h2> -->
                        <h3>School Life Expectancy</h3>
                        <p>11.2 years</p>
                        <h3>Critical thinking in teaching</h3>
                        <p>3.7 out 7</p>
                        <h3>Pupil-to-teacher ratio in primary education</h3>
                        <p>57.9</p>
                    </div>
                </div>
            </div>
            <div class="market">
                <div class="productmarket ">
                    <div id="domesticcomp_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Domestic Competition</h2> -->
                        <h3>Distortive effect of taxes and subsidies on competition</h3>
                        <p>4.5 out of 7</p>
                        <h3>Extent of Market dominance</h3>
                        <p>4.0 out of 7</p>
                        <h3>Competition in Services</h3>
                        <p>4.7 out of 7</p>
                    </div>

                    <div id="trade_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Trade</h2> -->
                        <h3>Prevalence of non-taiff barriers</h3>
                        <p>4.6 out of 7</p>
                        <h3>Trade Tarffis %</h3>
                        <p>10.94%</p>
                        <h3>Complexity of Tariffs</h3>
                        <p>6.3 out of 7</p>
                        <h3>Border clearance efficiency</h3>
                        <p>2.7 out of 5</p>
                    </div>
                </div>
                <div class="labourmarket ">
                    <div id="flexibility_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Flexibility</h2> -->
                        <h3>Redundancy costs (weeks of salary)</h3>
                        <p>13.0 weeks</p>
                        <h3>Hiring and Firing practices</h3>
                        <p>4.5 out of 7</p>
                        <h3>Cooperation in labour-employer relations</h3>
                        <p>4.9 out of 7</p>
                        <h3>Flexibility of wage determination</h3>
                        <p>5.1 out of 7</p>
                        <h3>Active labour market policies</h3>
                        <p>3.5 out of 7</p>
                        <h3>Workers' rights</h3>
                        <p>80.0 out of 100</p>
                        <h3>Ease of hiring foreign labour</h3>
                        <p>4.5 out of 7</p>
                        <h3>Internal labour mobility</h3>
                        <p>4.2 out of 7</p>
                    </div>

                    <div id="incentives_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Meritocracy and Incentivization</h2> -->
                        <h3>Reliance on professional management</h3>
                        <p>4.8 out of 7</p>
                        <h3>Pay and Productivity</h3>
                        <p>3.9 out of 7</p>
                        <h3>Ratio of wage and salaried female worker to male workers</h3>
                        <p>0.54%</p>
                        <h3>Labout tax rate</h3>
                        <p>6.0%</p>
                    </div>
                </div>
                <div class="financialsystem ">

                    <div id="financial_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Financial Depth</h2> -->
                        <h3>Domestic credit to private sector</h3>
                        <p>21.0 % of GDP</p>
                        <h3>Financing of SMEs</h3>
                        <p>4.1 out of 7</p>
                        <h3>Venture Capital availability</h3>
                        <p>3.7 out of 7</p>
                        <h3>Market Captalization</h3>
                        <p>21.0 % of GDP0</p>
                        <h3>Insurance premium</h3>
                        <p>1.3 voulume to GDP</p>
                        <!-- <h2>Financial Stability</h2> -->
                        <h3>Soundness of banks</h3>
                        <p>4.5 out of 7</p>
                        <h3>Non-performing loans</h3>
                        <p>7.2%</p>
                        <h3>Credit gap</h3>
                        <p>-0.5%</p>
                        <h3>Banks' regulatory capital ratio</h3>
                        <p>21.9 % of total risk-weighted assets</p>
                    </div>
                </div>
                <div class="marketsize ">

                    <div id="marketsize_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Market Size</h2> -->
                        <h3>Gross domestic product (PPP $ Billions)</h3>
                        <p>24BN USD</p>
                        <h3>Imports of goods and Services (% GDP)</h3>
                        <p>37.3% GDP</p>
                    </div>
                </div>
            </div>
            <div class="theinnovationecosystem ">
                <div class="business ">

                    <div id="admin_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Administrative Requirements</h2> -->
                        <h3>Cost of starting a business</h3>
                        <p>14.8% GNI per capita</p>
                        <h3>Time to start a business</h3>
                        <p>4 days</p>
                        <h3>Insolvency recovery rate</h3>
                        <p>19.2 cents to dollar</p>
                        <h3>Insolvency regulatory framework</h3>
                        <p>15.0 out of 16</p>
                    </div>

                    <div id="culture_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Entrepreneurial Culture</h2> -->
                        <h3>Attitudes towards entrepreneurial risk</h3>
                        <p>4.4 out of 7</p>
                        <h3>Willingness to delegate authority</h3>
                        <p>4.6 out of 7</p>
                        <h3>Growth of innovative companies</h3>
                        <p>4.3 out of 7</p>
                        <h3>Companies embracing distruptive ideas</h3>
                        <p>4.0 out of 7</p>
                    </div>
                </div>
                <div class="innovation ">

                    <div id="interaction_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Interaction and Diversity</h2> -->
                        <h3>Diversity of workforce</h3>
                        <p>4.0 out of 7</p>
                        <h3>State of cluster development</h3>
                        <p>3.9 out of 7</p>
                        <h3>International co-inventions</h3>
                        <p>0.5 out of 100</p>
                        <h3>Multi-stakeholder collaboration</h3>
                        <p>3.9 out of 7</p>
                    </div>
                    <div id="randd_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Research and Development</h2> -->
                        <h3>Scientific Publications</h3>
                        <p>63.1 out of 100</p>
                        <h3>Patent Applications</h3>
                        <p>0.3 out of 100</p>
                        <h3>R&D expenditures</h3>
                        <p>0.9% GDP</p>
                        <h3>Research institutions prominence</h3>
                        <p>0.4 out of 100</p>
                    </div>
                    <div id="commerce_details" class="tabcontent" style="display: none; ">
                        <!-- <h2>Commercialization</h2> -->
                        <h3>Buyer Sophistication</h3>
                        <p>3.2 out of 7</p>
                        <h3>Trademark applications</h3>
                        <p>33.5 out of 100</p>
                    </div>
                </div>
            </div>

        </div>

        <div id="disqus_thread"></div>
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://investafrica.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    </div>
    <h3>All scores on investinafrica.com are scored out of a hunderd and data is sourced from doingbusiness.org</h3>
    </div>
</body>

</div>

</html>