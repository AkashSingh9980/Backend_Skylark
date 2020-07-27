<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" http-equiv="encoding" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Student Analytics</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <script src="https://d3js.org/d3.v5.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.16/css/dataTables.bootstrap4.css" rel="stylesheet">
        
        <style>
          @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
          @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
        </style>
        <style>
            rect{
                fill: yellowgreen;
                fill-opacity: 0.8;
            }
            rect:hover{
                fill-opacity: 1;
            }
            path{
                fill-opacity:0.8;
            }
            .selected,
            path:hover{
                fill-opacity: 1;
            }
            .axis{
                font-size: smaller;
            }
            main{
                display:flex;
                flex-wrap:wrap;
            }
            h3{
                text-align:center;
            }
        </style>
    
        
        <link rel="stylesheet" href="css/dashboard.css">
       
      </head>
      <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
          <a class="navbar-brand" href="index.html">Skylark Dashboard</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.html">
                  <i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-wrench"></i>
                  <span class="nav-link-text">Modules</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                  <li>
                    <a href="navbar.html">Packages</a>
                  </li>
                  <li>
                    <a href="cards.html">Products</a>
                  </li>
                  <li>
                    <a href="">Services</a>
                  </li>
                </ul>
              </li>
             
            </ul>
            <ul class="navbar-nav sidenav-toggler">
              <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                </a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                  <a class="dropdown-item" href="logout">
                    <span>
                      <strong>
                       Logout
                      </strong>
                    </span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        
        <div class="content-wrapper">
                    
          <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
            
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-database"></i> Packages</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>dataid</th>
                        <th>datatype</th>
                        <th>title</th>
                        <th>price</th>
                        <th>header</th>
                        <th>description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($packages as $package)
                        <tr>
                          <td>{{$package->id}}</td>
                          <td>{{$package->dataid}}</td>
                          <td>{{$package->datatype}}</td>
                          <td>{{$package->title}}</td>
                          <td>{{$package->price}}</td>
                          <td>{{$package->header}}</td>
                          <td>{{$package->description}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">
                {{-- Retrieved <span id="datetime"></span>
                    <script>
                      var dt=new Date();
                      document.getElementById("datetime").innerHTML=dt.toLocaleString();
                    </script> --}}
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-database"></i> Products</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>dataid</th>
                        <th>datatype</th>
                        <th>title</th>
                        <th>details</th>
                        <th>imgfile</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                        <tr>
                          <td>{{$product->id}}</td>
                          <td>{{$product->dataid}}</td>
                          <td>{{$product->datatype}}</td>
                          <td>{{$product->title}}</td>
                          <td>{{$product->details}}</td>
                          <td>{{$product->imgfile}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">
                {{-- Retrieved <span id="datetime"></span>
                    <script>
                      var dt=new Date();
                      document.getElementById("datetime").innerHTML=dt.toLocaleString();
                    </script> --}}
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-database"></i> Services</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>details</th>
                        <th>imgfile</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($services as $service)
                        <tr>
                          <td>{{$service->id}}</td>
                          <td>{{$service->title}}</td>
                          <td>{{$service->details}}</td>
                          <td>{{$service->imgfile}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">
                {{-- Retrieved <span id="datetime"></span>
                    <script>
                      var dt=new Date();
                      document.getElementById("datetime").innerHTML=dt.toLocaleString();
                    </script> --}}
              </div>
            </div>
            {{-- <div class="row">
              <div class="col-lg-8">
                <!-- Example Bar Chart Card-->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-bar-chart"></i> Certifications Distributions</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-8 my-auto">
                        <canvas id="myBarChart" width="100" height="50"></canvas>
                        <script src="https://d3js.org/d3.v4.js"></script>
                        <div id="my_dataviz2"></div>
                        <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>
                        <script>
                          var width1=500;
                              height1=500;
                              margin1=40;
                          var radius1=Math.min(width1,height1)/2-margin1;

                          //append the svg object to the div called 'my_datawiz'
                          var svg1=d3
                            .select("#my_dataviz2")
                            .append("svg")//check
                              .attr("width", width1)
                              .attr("height", height1)
                              .append("g")
                              .attr("transform","translate("+width1/2+","+height1/2+")");

                          //get data
                          d3.csv("https://raw.githubusercontent.com/adityavdesai/Student-Placement-Analysis/master/placement-data.csv?token=AG3N2VE2GGWD4DCZERDFK3C6Z7RLA", function (data) {
                              console.log(data);
                              var color = d3.scaleOrdinal().domain(data).range(d3.schemeSet2);
                              //compute position of each group on pie:
                              var data = d3.nest()
                                  .key(function (d) {
                                      return d.Certifications;
                                  })
                                  .rollup(function (v) {
                                      return d3.sum(v, function (d) {
                                          return 1;
                                      });
                                  })
                                  .entries(data)
                              console.log(JSON.stringify(data))
                              var pie = d3.pie().value(function (d) {
                                  console.log("d.value=" + d.value);
                                  return d.value.value;
                              });
                              var data_ready = pie(d3.entries(data));
                              var arcGenerator = d3.arc().innerRadius(0).outerRadius(radius1);

                            svg1
                              .selectAll("mySlices")
                              .data(data_ready)
                              .enter()
                              .append("path")
                              .attr("d",arcGenerator)
                              .attr("fill",function(d){
                                return color(d.data.value.key);
                              })
                              .attr("stroke","black")
                              .style("stroke-width","2px")
                              .style("opacity",0.7)

                              //add annotation
                              svg1
                                .selectAll("mySlices")
                                .data(data_ready)
                                .enter()
                                .append("text")
                                .text(function(d){
                                  return d.data.value.key+"-"+d.data.value.value;
                                })
                                .attr("transform",function(d){
                                  return "translate("+arcGenerator.centroid(d)+")";
                                })
                                .style("text-anchor","middle")
                                .style("font-size",11)
                          });
                          
                        </script>
                      </div>
                     
                    </div>
                  </div>
                  <div class="card-footer small text-muted">
                    Updated <span id="datetime1"></span>
                    <script>
                      var dt=new Date();
                      document.getElementById("datetime1").innerHTML=dt.toLocaleString();
                    </script>
                  </div>
                </div>
                <!-- Card Columns Example Social Feed-->
                
                <hr class="mt-2">
                
                <!-- /Card Columns-->
              </div>
              <div class="col-lg-4">
                <!-- Example Pie Chart Card-->
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-pie-chart"></i> Gender distribution</div>
                  <div class="card-body">
                    <canvas id="myPieChart" width="100%" height="100"></canvas>
                    <script src="https://d3js.org/d3.v5.js"></script>
                    <div>
                        <strong>Selected Gender: </strong>
                        <span id="selectedSex"></span>
                        
                      </div>
                      <main>
                        <section>
                          <h3>Gender Distribution</h3>
                          <svg id="sex"></svg>
                        </section>
                        
                      </main>
                    <script>
                      const state = {
                          selectedSex: null,
                        };
                        
                        function createPieChart(svgSelector,stateAttr,colorScheme){
                            const  margin=10;
                            const radius=100;

                            //creates sources <svg> element
                            const svg=d3
                                .select(svgSelector)
                                .attr("width",radius*2+margin*2)
                                .attr("height",radius*2+margin*2)
                                .attr("stroke","black")
                                .style("stroke-width","2px")

                            //group used to enforce margin
                            const g=svg.append("g").attr("transform",`translate(${radius+margin},${radius+margin})`);
                            const pie=d3
                                .pie()
                                .value((d)=>d.values.length)
                                .sortValues(null)
                                .sort(null);
                            const arc=d3.arc().outerRadius(radius).innerRadius(0);
                            const noSlice=[
                                {startAngle:0,endAngle:Math.PI*2,padAngle:0},
                                {startAngle:0,endAngle:0,padAngle:0},
                            ];
                            const cscale=d3.scaleOrdinal(colorScheme);

                            function update(new_data){
                                //{key:string,values:IPerson[]}[]
                                const pied=pie(new_data);
                                //Render chart with new data

                                cscale.domain(new_data.map((d)=>d.key));

                                //DATA JOIN
                                const old=g.selectAll("path").data();

                                function tweenArc(d,i){
                                    const interpolate=d3.interpolateObject(old[i],d);
                                    return (t)=>arc(interpolate(t));
                                }

                                //DATA JOIn
                                const path=g
                                    .selectAll("path")
                                    .data(pied,(d)=>d.data.key)
                                    .join(
                                        //enter
                                        //new elements
                                        (enter)=>{
                                            const path_enter=enter
                                                .append("path")
                                                .attr("d",(d,i)=>arc(noSlice[i]))
                                                .on("click",(d)=>{
                                                    if(state[stateAttr]===d.data.key){
                                                        state[stateAttr]=null;
                                                    }
                                                    else{
                                                        state[stateAttr]=d.data.key;
                                                    }
                                                    updateApp();
                                                });
                                                path_enter.append("title");
                                                return path_enter;
                                        },
                                        (update)=>update,
                                        (exit)=>exit.transition().attrTween("d",tweenArc).remove()
                                    );
                                
                                    //ENTER+UPDATE
                                    //both old and new elements
                                    path
                                        .classed("selected",(d)=>d.data.key===state.selectedSex)
                                        .transition()
                                        .attrTween("d",tweenArc)
                                        .style("fill",(d)=>cscale(d.data.key));
                                    path.select("title").text((d)=>`${d.data.key}:${d.data.values.length}`);

                            }
                            return update;
                        }
                        ///////////////////////////
                        const sexPieChart=createPieChart("#sex","selectedSex",d3.schemeSet3);

                        //d.columnname where d.Gender
                        function filterData(){
                            return state.data.filter((d)=>{
                                if(state.selectedSex && d.Sex!==state.selectedSex){
                                    return false;
                                }
                                return true;
                            });
                        }
                        //d.columnname === key
                        function wrangleData(filtered){
                            const sexPieData=["Female","Male"].map((key)=>({
                                key,
                                values:filtered.filter((d)=>d.Sex===key),
                            }));

                            return{
                                sexPieData
                            };
                        }
                        function updateApp(){
                            const filtered=filterData();
                            const{sexPieData}=wrangleData(filtered);
                            sexPieChart(sexPieData);

                            d3.select("#selectedSex").text(state.selectedSex || "None");
                        }
                        
                        // Add csv source here
                        d3.csv("https://raw.githubusercontent.com/adityavdesai/Student-Placement-Analysis/master/placement-data.csv?token=AG3N2VE2GGWD4DCZERDFK3C6Z7RLA").then((parsed)=>{
                            state.data=parsed.map((row)=>{
                                return row;
                            });
                            updateApp();
                            
                        })

                    </script>
                  </div>
                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
                <!-- Example Notifications Card-->
                
              </div>
            </div>
            <!-- Add new elements -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                      <tr>
                        <td>Caesar Vance</td>
                        <td>Pre-Sales Support</td>
                        <td>New York</td>
                        <td>21</td>
                        <td>2011/12/12</td>
                        <td>$106,450</td>
                      </tr>
                      <tr>
                        <td>Doris Wilder</td>
                        <td>Sales Assistant</td>
                        <td>Sidney</td>
                        <td>23</td>
                        <td>2010/09/20</td>
                        <td>$85,600</td>
                      </tr>
                      <tr>
                        <td>Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2009/10/09</td>
                        <td>$1,200,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Joyce</td>
                        <td>Developer</td>
                        <td>Edinburgh</td>
                        <td>42</td>
                        <td>2010/12/22</td>
                        <td>$92,575</td>
                      </tr>
                      <tr>
                        <td>Jennifer Chang</td>
                        <td>Regional Director</td>
                        <td>Singapore</td>
                        <td>28</td>
                        <td>2010/11/14</td>
                        <td>$357,650</td>
                      </tr>
                      <tr>
                        <td>Brenden Wagner</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>28</td>
                        <td>2011/06/07</td>
                        <td>$206,850</td>
                      </tr>
                      <tr>
                        <td>Fiona Green</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>San Francisco</td>
                        <td>48</td>
                        <td>2010/03/11</td>
                        <td>$850,000</td>
                      </tr>
                      <tr>
                        <td>Shou Itou</td>
                        <td>Regional Marketing</td>
                        <td>Tokyo</td>
                        <td>20</td>
                        <td>2011/08/14</td>
                        <td>$163,000</td>
                      </tr>
                      <tr>
                        <td>Michelle House</td>
                        <td>Integration Specialist</td>
                        <td>Sidney</td>
                        <td>37</td>
                        <td>2011/06/02</td>
                        <td>$95,400</td>
                      </tr>
                      <tr>
                        <td>Suki Burks</td>
                        <td>Developer</td>
                        <td>London</td>
                        <td>53</td>
                        <td>2009/10/22</td>
                        <td>$114,500</td>
                      </tr>
                      <tr>
                        <td>Prescott Bartlett</td>
                        <td>Technical Author</td>
                        <td>London</td>
                        <td>27</td>
                        <td>2011/05/07</td>
                        <td>$145,000</td>
                      </tr>
                      <tr>
                        <td>Gavin Cortez</td>
                        <td>Team Leader</td>
                        <td>San Francisco</td>
                        <td>22</td>
                        <td>2008/10/26</td>
                        <td>$235,500</td>
                      </tr>
                      <tr>
                        <td>Martena Mccray</td>
                        <td>Post-Sales support</td>
                        <td>Edinburgh</td>
                        <td>46</td>
                        <td>2011/03/09</td>
                        <td>$324,050</td>
                      </tr>
                      <tr>
                        <td>Unity Butler</td>
                        <td>Marketing Designer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/12/09</td>
                        <td>$85,675</td>
                      </tr>
                      <tr>
                        <td>Howard Hatfield</td>
                        <td>Office Manager</td>
                        <td>San Francisco</td>
                        <td>51</td>
                        <td>2008/12/16</td>
                        <td>$164,500</td>
                      </tr>
                      <tr>
                        <td>Hope Fuentes</td>
                        <td>Secretary</td>
                        <td>San Francisco</td>
                        <td>41</td>
                        <td>2010/02/12</td>
                        <td>$109,850</td>
                      </tr>
                      <tr>
                        <td>Vivian Harrell</td>
                        <td>Financial Controller</td>
                        <td>San Francisco</td>
                        <td>62</td>
                        <td>2009/02/14</td>
                        <td>$452,500</td>
                      </tr>
                      <tr>
                        <td>Timothy Mooney</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>37</td>
                        <td>2008/12/11</td>
                        <td>$136,200</td>
                      </tr>
                      <tr>
                        <td>Jackson Bradshaw</td>
                        <td>Director</td>
                        <td>New York</td>
                        <td>65</td>
                        <td>2008/09/26</td>
                        <td>$645,750</td>
                      </tr>
                      <tr>
                        <td>Olivia Liang</td>
                        <td>Support Engineer</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2011/02/03</td>
                        <td>$234,500</td>
                      </tr>
                      <tr>
                        <td>Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>38</td>
                        <td>2011/05/03</td>
                        <td>$163,500</td>
                      </tr>
                      <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Support Engineer</td>
                        <td>Tokyo</td>
                        <td>37</td>
                        <td>2009/08/19</td>
                        <td>$139,575</td>
                      </tr>
                      <tr>
                        <td>Thor Walton</td>
                        <td>Developer</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2013/08/11</td>
                        <td>$98,540</td>
                      </tr>
                      <tr>
                        <td>Finn Camacho</td>
                        <td>Support Engineer</td>
                        <td>San Francisco</td>
                        <td>47</td>
                        <td>2009/07/07</td>
                        <td>$87,500</td>
                      </tr>
                      <tr>
                        <td>Serge Baldwin</td>
                        <td>Data Coordinator</td>
                        <td>Singapore</td>
                        <td>64</td>
                        <td>2012/04/09</td>
                        <td>$138,575</td>
                      </tr>
                      <tr>
                        <td>Zenaida Frank</td>
                        <td>Software Engineer</td>
                        <td>New York</td>
                        <td>63</td>
                        <td>2010/01/04</td>
                        <td>$125,250</td>
                      </tr>
                      <tr>
                        <td>Zorita Serrano</td>
                        <td>Software Engineer</td>
                        <td>San Francisco</td>
                        <td>56</td>
                        <td>2012/06/01</td>
                        <td>$115,000</td>
                      </tr>
                      <tr>
                        <td>Jennifer Acosta</td>
                        <td>Junior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>43</td>
                        <td>2013/02/01</td>
                        <td>$75,650</td>
                      </tr>
                      <tr>
                        <td>Cara Stevens</td>
                        <td>Sales Assistant</td>
                        <td>New York</td>
                        <td>46</td>
                        <td>2011/12/06</td>
                        <td>$145,600</td>
                      </tr>
                      <tr>
                        <td>Hermione Butler</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>47</td>
                        <td>2011/03/21</td>
                        <td>$356,250</td>
                      </tr>
                      <tr>
                        <td>Lael Greer</td>
                        <td>Systems Administrator</td>
                        <td>London</td>
                        <td>21</td>
                        <td>2009/02/27</td>
                        <td>$103,500</td>
                      </tr>
                      <tr>
                        <td>Jonas Alexander</td>
                        <td>Developer</td>
                        <td>San Francisco</td>
                        <td>30</td>
                        <td>2010/07/14</td>
                        <td>$86,500</td>
                      </tr>
                      <tr>
                        <td>Shad Decker</td>
                        <td>Regional Director</td>
                        <td>Edinburgh</td>
                        <td>51</td>
                        <td>2008/11/13</td>
                        <td>$183,000</td>
                      </tr>
                      <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                      </tr>
                      <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>             --}}
          </div>
          <!-- /.container-fluid-->
          <!-- /.content-wrapper-->
          <footer class="sticky-footer">
            {{-- <div class="container">
              <div class="text-center">
                <small>Copyright ©GetPlaced 2020</small>
              </div>
            </div> --}}
          </footer>
          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
          </a>
          <!-- Logout Modal-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout">Logout</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </body>
</html>