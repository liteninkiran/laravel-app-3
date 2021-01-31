@extends('layouts.profile-layout')

@section('content')

    <!-- Header Showcase -->
    <header id="showcase" class="grid">

        <div class="bg-image"></div>

        <div class="content-wrap">

            <a href="CV.docx" class="btn" id="download">Download CV</a>

            <h1 style="margin-bottom: 30px;">Welcome To Kiran Anand's Online CV</h1>

            <div class="grid-2">
                <div><a href="#section-a" class="btn">Professional Profile</a></div>
                <div><a href="#section-b" class="btn">Technology</a></div>
                <div><a href="#section-c" class="btn">Work Experience</a></div>
                <div><a href="#section-d" class="btn">Contact</a></div>
            </div>

        </div>

    </header>

    <!-- Main Area -->
    <main id="main">

        <!-- A: Professional Profile -->
        <section id="section-a" class="grid">
            <div class="content-wrap">
                <h2 class="content-title">Professional Profile</h2>
                <div class="content-text">
                    <p>Dedicated web developer with 18 months experience in website design. Strong creative and analytical skills. Team player with an eye for detail. PHP (CodeIgniter & Laravel), Apache, MySQL.</p>
                    <p>I am currently looking for a role where I can gain experience with <strong>Unit Testing</strong> and <strong>TDD</strong>.</p>
                </div>
            </div>
        </section>

        <!-- B: Technology Stacks -->
        <section id="section-b" class="grid">

            <div></div>
            <div id="section-b-title"><h2 class="content-title">Technology Stacks</h2></div>

            <ul>
                <li>
                    <div class="card">
                        <img src="https://www.cloudways.com/blog/wp-content/uploads/best-php-frameworks-1.jpg">
                        <div class="card-content">
                            <h3 class="card-title">Web Development</h3>
                            <p>• CodeIgniter v3 and v4</p>
                            <p>• Laravel v8</p>
                            <p>• PHP</p>
                            <p>• JavaScript, jQuery</p>
                            <p>• HTML and CSS</p>
                            <p>• WordPress</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <img src="https://agilethought.com/wp-content/uploads/2018/10/power-BI.png">
                        <div class="card-content">
                            <h3 class="card-title">BI Development</h3>
                            <p>• QlikView</p>
                            <p>• Power BI</p>
                            <p>• SSRS / SSAS / SSIS</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <img src="https://www.scnsoft.com/blog-pictures/information-security/7-best-practices-for-database-security.png">
                        <div class="card-content">
                            <h3 class="card-title">SQL Development</h3>
                            <p>• SQL Server Management Studio</p>
                            <p>• MySQL</p>
                            <p>• Oracle</p>
                            <p>• MongoDB</p>
                            <p>• DB2</p>
                        </div>
                    </div>
                </li>
            </ul>

        </section>

        <!-- C: Work Experience -->
        <section id="section-c" class="grid">

            <div class="content-wrap">

                <h2 class="content-title">Work Experience</h2>

                <!-- Web Development -->
                <button type="button" class="collapsible coll-parent">Web Development & BI</button>

                <div class="collapse-content">

                    <!-- Peach -->
                    <button type="button" class="collapsible coll-child">Peach Technologies</button>

                    <div class="collapse-content">

                        <h4>Web Developer</h4>
                        <small>October 2019 to current</small>
                        <p>Working for a digital marketing agency, the role requires website development and support for a wide range of clients. Technology stacks include CodeIgniter, Laravel and WordPress. Responsibilities include:</p>

                        <div class="list">
                            <ul>
                                <li>Write well designed, testable, efficient code by using best software development practices</li>
                                <li>Create website layout/user interface by using standard HTML/CSS practices</li>
                                <li>Integrate data from various back-end services and databases</li>
                                <li>Gather and refine specifications and requirements based on technical needs</li>
                                <li>Create and maintain software documentation</li>
                            </ul>
                        </div>

                        <p>Design a data-mart for NHS Prescription analysis in Power BI.</p>

                        <div class="list">
                            <ul>
                                <li>Build data mart in SSMS</li>
                                <li>Build ETL packages in SSIS</li>
                                <li>Build analysis tool in Power BI</li>
                                <li>Create and maintain software documentation</li>
                            </ul>
                        </div>


                    </div>


                    <!-- Babcock -->
                    <button type="button" class="collapsible coll-child">Babcock International</button>

                    <div class="collapse-content">

                        <h4>BI Developer</h4>
                        <small>May 2019 to July 2019</small>
                        <p>Working in the Land Training Hub, the role is responsible for data collection, validation, analysis and dashboard reporting, to deliver both internally and externally facing Management Information, primarily using QlikView and Power BI.</p>

                        <div class="list">
                            <ul>
                                <li>Perform analysis of source systems and data to model that data in QlikView and Power BI</li>
                                <li>Conduct ETL processes on data from multiple sources into QlikView and Power BI</li>
                                <li>Design and develop scripts which import data from source systems</li>
                                <li>Testing own work, as well as peer review of colleagues to create a collaborative and constructive development environment</li>
                            </ul>
                        </div>

                    </div>

                </div>



                <!-- Contracting -->
                <button type="button" class="collapsible coll-parent">Contracting</button>

                <div class="collapse-content">

                    <!-- Dell EMC -->
                    <button type="button" class="collapsible coll-child">Dell EMC</button>

                    <div class="collapse-content">

                        <h4>SQL Developer</h4>
                        <small>October 2018 to February 2019 (Contract)</small>
                        <p>Support the implementation of the Data Transformation Manager application – an off-the-shelf tool for managing Data Centre Transformation projects. DTM has SQL Server back-end and web front-end.</p>

                        <div class="list">
                            <ul>
                                <li>Meeting with business users to define their current processes and business rules</li>
                                <li>Analysis of existing Excel-based solution</li>
                                <li>Mapping, cleansing and transforming data</li>
                                <li>Customising DTM</li>
                                <li>Bug fixing DTM (profiler, stored procedures, triggers, functions, views)</li>
                                <li>Migrating data</li>
                                <li>Building reports in SSRS and Excel</li>
                            </ul>
                        </div>

                    </div>


                    <!-- SSE -->
                    <button type="button" class="collapsible coll-child">SSE</button>

                    <div class="collapse-content">

                        <h4>VBA Developer</h4>
                        <small>May 2018 to August 2018 (Contract)</small>
                        <p>Working on the Transparent Pricing project to alter SSE's electricity pricing & quotation systems for non-domestic customers (ESIQS), built primarily in C#.NET and Microsoft Access with an Oracle back-end. The VBA Developer will be responsible for development on the MS Access system.</p>

                        <div class="list">
                            <ul>
                                <li>Make code changes to ESIQS Access front-end database</li>
                                <li>Make code changes to ESIQS Oracle back-end database</li>
                                <li>Contributes to testing best practices with a primary emphasis on automated unit testing</li>
                                <li>Participate in daily stand-up, sprint planning and sprint retrospective meetings</li>
                                <li>Participate in analysis of requirements/user stories</li>
                            </ul>
                        </div>

                    </div>


                    <!-- HSBC -->
                    <button type="button" class="collapsible coll-child">HSBC</button>

                    <div class="collapse-content">

                        <h4>VBA Developer</h4>
                        <small>July 2017 to March 2018 (Contract)</small>
                        <p>Fully re-engineer an existing automated Excel solution for the Funds Dealing team.</p>

                        <div class="list">
                            <ul>
                                <li>Analyse existing Excel VBA solution</li>
                                <li>Re-design in Access VBA</li>
                                <li>Test with users</li>
                                <li>Create documentation (user guide, design spec, maintenance guide)</li>
                                <li>Make changes to existing processes within the team</li>
                            </ul>
                        </div>

                    </div>


                    <!-- Wellesley Finance -->
                    <button type="button" class="collapsible coll-child">Wellesley Finance</button>

                    <div class="collapse-content">

                        <h4>VBA Developer</h4>
                        <small>March 2017 to July 2017 (Contract)</small>
                        <p>Wellesley have 10,000 small investors and loan money to a small number of property developers. Upgrade the Loans database built in Microsoft Access.</p>

                        <div class="list">
                            <ul>
                                <li>Fix reported bugs</li>
                                <li>Apply new features</li>
                                <li>Automate deployment of new front-end database</li>
                                <li>Create and maintain documentation</li>
                            </ul>
                        </div>

                    </div>


                    <!-- Brunswick Group -->
                    <button type="button" class="collapsible coll-child">Brunswick Group</button>

                    <div class="collapse-content">

                        <h4>Data Analyst</h4>
                        <small>January 2017 to February 2017 (Contract)</small>
                        <p>Assist with data manipulation tasks for managing the Brunswick Review distribution list built in Microsoft Access. Support CRM project with data requests.</p>

                        <div class="list">
                            <ul>
                                <li>Analyse and cleanse data</li>
                                <li>Assist with de-duplication tasks</li>
                                <li>Write re-runnable DML statements</li>
                            </ul>
                        </div>

                    </div>


                    <!-- SSE -->
                    <button type="button" class="collapsible coll-child">SSE</button>

                    <div class="collapse-content">

                        <h4>Database Analyst</h4>
                        <small>June 2016 to September 2016 (Contract)</small>
                        <p>Manage Gas Safety Inspection database and Electricity Recertification database, both written in Microsoft Access.</p>

                        <div class="list">
                            <ul>
                                <li>Implement changes required by the business</li>
                                <li>Support users with operational issues</li>
                                <li>Implement bug-fixes</li>
                            </ul>
                        </div>

                    </div>


                    <!-- Yorkshire Water -->
                    <button type="button" class="collapsible coll-child">Yorkshire Water</button>

                    <div class="collapse-content">

                        <h4>Systems Analyst</h4>
                        <small>July 2015 to March 2016 (Contract)</small>
                        <p>Joining an organisation which is going through significant regulatory changes, the Systems Analyst will provide critical data manipulation tasks in order to meet regulatory standards. Apply data-fixes to the billing system, which provides crucial data and is built on a SQL Server platform. This data will need to be extracted and collated to support future regulatory changes in 2017 (i.e. the <a href="https://www.ofwat.gov.uk/regulated-companies/markets/business-retail-market/" target="_blank">Business Retail Market</a>).</p>

                        <div class="list">
                            <ul>
                                <li>Apply data fixes using SSMS (stored procedures, functions, triggers)</li>
                                <li>De-duplicate customer and address records</li>
                                <li>Identify and resolve invalid addresses</li>
                                <li>Match customer address data with Address Base Premium</li>
                            </ul>
                        </div>

                    </div>


                    <!-- Chas A Blatchford & Sons -->
                    <button type="button" class="collapsible coll-child">Chas A Blatchford & Sons</button>

                    <div class="collapse-content">

                        <h4>BI Developer</h4>
                        <small>December 2014 to June 2015 (Contract)</small>
                        <p>Blatchfords manufacture prosthetic limbs. The BI Developer must develop data cubes in SSAS and reports in SSRS, to provide critical MI across the entire business.</p>

                        <div class="list">
                            <ul>
                                <li>Gather requirements</li>
                                <li>Define and build cubes in SSAS</li>
                                <li>Build reports in SSRS (MDX)</li>
                                <li>Create and maintain documentation</li>
                            </ul>
                        </div>

                    </div>

                </div>


                <!-- Permanent -->
                <button type="button" class="collapsible coll-parent">Permanent</button>

                <div class="collapse-content">

                    <!-- SSE -->
                    <button type="button" class="collapsible coll-child">SSE</button>

                    <div class="collapse-content">

                        <h4>Database Developer</h4>
                        <small>April 2011 to November 2014</small>
                        <p>Build and maintain Microsoft Access databases to support customer service and metering BAU processes, including, but not limited to, <a href="https://www.gov.uk/guidance/electricity-meter-certification" target="_blank">Electricity Recertifications</a> and <a href="https://www.ofgem.gov.uk/publications-and-updates/reforming-suppliers-meter-inspection-obligations" target="_blank">Gas Safety Inspections</a>.</p>

                        <div class="list">
                            <ul>
                                <li>Gather and document requirements from stakeholders including meter reading agents, call centre staff and middle/senior management</li>
                                <li>Design and implement separate front-end and back-end databases (tables, queries, forms, relationships, macros, data macros, VBA, SQL)</li>
                                <li>Support database with additional user requests/ongoing maintenance</li>
                            </ul>
                        </div>

                        <h4>Estimated Billing Manager</h4>
                        <small>April 2009 to April 2011</small>
                        <p>Improve estimated billing for domestic/commercial gas customers and domestic electricity customers. Refine data models using demand estimation data from Xoserve and Elexxon and AQ or EAC. Secondarily, support the Gas Reconciliation team with AQ reviews and support manual iGT processes.</p>

                        <div class="list">
                            <ul>
                                <li>Form relationships with internal and external clients</li>
                                <li>Use SQL Server Management Studio for data modelling</li>
                                <li>Implement <a href="https://www.xoserve.com/media/8182/de_team_update_euc_modelling_feb20.pdf" target="_blank">demand data</a> into existing estimated billing code in DB2 back-end database</li>
                                <li>Create industry standard workflow items <a href="https://www.xoserve.com/media/3959/u01-unbundled-meter-read.pdf" target="_blank">(U01 - unbundled meter readings)</a></li>
                            </ul>
                        </div>

                        <h4>Data Analyst</h4>
                        <small>April 2007 to April 2009</small>
                        <p>Analyse billing data with specific focus on estimated billing. Run queries against CS billing data, update and distribute MI reports to middle and senior management.</p>

                        <div class="list">
                            <ul>
                                <li>Update MI reports using SQL Server Management Studio</li>
                                <li>Automate reporting process using VBA and VBScript</li>
                                <li>Attend meetings to discuss estimated billing</li>
                            </ul>
                        </div>

                    </div>

                </div>

                <div class="list">
                    <h2 class="content-title" style="padding: 40px 0 0 0;">Interview Questions</h2>
                    <ul>
                        <li>What are the 3 most challenging aspects of the role?</li>
                        <li>Are tangible changes made as a result of lessons learnt from previous projects? If so, please give an example.</li>
                        <li>Please describe the process for making a code change to a system. Please make reference to:</li>
                        <ul>
                            <li>How requirements are both gathered and documented</li>
                            <li>Git workflow</li>
                            <li>Testing procedures (including Unit Testing)</li>
                            <li>Factors affecting the priority of the change</li>
                        </ul>
                        <li>What does a typical working day look like?</li>
                        <li>Based on the last 10 meeting invites you have either sent or received, how many had a meeting agenda clearly stated on them?</li>
                    </ul>
                </div>

            </div>

        </section>

        <!-- D: Contact/About -->
        <section id="section-d" class="grid">

            <div class="box box-d1">
                <h2 class="content-title">Contact Me</h2>
                <p>Thanks for stopping by. Recruiters and Hiring Managers, please feel free to pop an email across if you would like to introduce yourself. I am actively looking for roles where I can gain experience with <strong>Unit Testing</strong> and <strong>TDD</strong>.</p>
                <a href="mailto: liteninkiran@yahoo.co.uk" target="_blank">liteninkiran@yahoo.co.uk</a>
            </div>

            <div class="box box-d2">
                <h2 class="content-title">External Links</h2>
                <a href="https://www.kiran-anand.com" target="_blank">www.kiran-anand.com</a>
                <a href="https://www.github.com/liteninkiran/laravel-app-3" target="_blank">www.github.com/liteninkiran</a>
                <a href="https://www.linkedin.com/in/kirananand/" target="_blank">www.linkedin.com/in/kirananand</a>
            </div>

        </section>

    </main>

    <!-- Footer -->
    <footer id="main-footer" class="grid">

        <div>
            Copyright Kiran Anand 2021
        </div>

        <div id="counter">
{{-- 
            <a href='https://dissertation-writingservice.com/'>https://dissertation-writingservice.com</a>
            <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=c246468f2201fbb8cc50d19bbc6e759c081da722'></script>
            <script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/782004/t/9"></script>
 --}}
        </div>

        <div>
            Proceed to <a href="{{ route('home') }}">Main Website</a>
        </div>

    </footer>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

@endsection


