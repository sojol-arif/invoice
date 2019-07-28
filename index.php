<?php include('header.php'); ?>
<div contenteditable="true" class="readonly" class="t"></div>
<main>
    <div class="full-page">
        <div class="container">
            <form action="">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <!-- top heading -->
                        <header id="heading" class="ic-top-heading p-0">
                            <div class="title">
                                <h1>New Invoice</h1>
                            </div>
                            <div class="button-grp">
                                <button id="t-canel" class="ic-btn">Canel</button>
                                <button id="t-save" class="ic-btn ic-btn-primary">Save</button>
                                <button id="t-send" class="ic-btn ic-btn-primary" type="submit">Send..</button>
                            </div>
                        </header>
                        <!-- top heading end -->
                        <!-- invoice -->
                        <section class="ic-invoice p-0">
                            <div class="wrapper">
                                <div class="heading">
                                    <div class="ic-form-inner">
                                        <div class="ic-left">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="h-cn" aria-describedby="" placeholder="Company Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="phone" class="form-control" id="h-pn" aria-describedby="" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="ic-right">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="" aria-describedby="" placeholder="street">
                                            </div>
                                            <div class="ic-inline">
                                                <div class="form-group ic-state">
                                                    <div class="ic-select-div theme-select">
                                                        <select class="ic-select" data-placeholder="State">
                                                            <option value=""></option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <span class="ic-semicolon">,</span>
                                                <div class="form-group ic-city">
                                                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="" aria-describedby="" placeholder="ZIP Code">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group country-state">
                                                    <div class="ic-select-div theme-select">
                                                        <select class="ic-select" data-placeholder="United States">
                                                            <option value=""></option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="California">California</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- invoice banner -->
                                <div class="ic-invoice-banner">
                                    <div class="inner">
                                        <img src="images/support.png" id="banner-img"/>
                                        <div class="button">
                                            <input type="file" name="file" id="banner-input" class="hidden">
                                            <label for="banner-input" class="banner-label mb-0"><i class="fa fa-plus"></i><span class="ic-add-image">Add Image</span></label>
                                            <label class="">or <span class="link drop-image-delete">delete this image</span></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- invoice banner end-->
                                <!-- invoice body -->
                                <div class="ic-invoice-body">
                                    <div class="inner">
                                        <!-- sidebar -->
                                        <aside class="ic-invoice-sidebar">
                                            <!-- single block -->
                                            <div class="ic-single-block-asidebar">
                                                <div class="ic-text ic-invoice-label">Amount Due (USD)</div>
                                                <div class="ic-invoice-totoal">$0.00</div>
                                            </div>
                                            <!-- single block -->
                                            <div class="ic-single-block-asidebar ic-add-client-main">
                                                <div class="ic-text ic-invoice-label">Billed To</div>
                                                    <div class="ic-add-a-client ic-click-view">          <div class="row">
                                                        <div class="col-12">
                                                            <!-- tab button -->
                                                            <div class="nav flex-column nav-pills ic-sidebar-tab-btn" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link ic-tab-btn" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                                    <div class="inner">
                                                                        <i class="fa fa-plus"></i><span class="ic-add-image">Add a Client</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- tab button end -->
                                                        </div>
                                                        <div class="col-12">
                                                            <!-- tab view -->
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                    <!-- tab content -->
                                                                    <div class="ic-full-input ic-inner ic-client-input-field-div">
                                                                        <div class="ic-inline">
                                                                            <div class="form-group">
                                                                                <input type="text ic-input-btn" class="form-control ic-first-name" id="" aria-describedby="" placeholder="First Name" autofocus>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <input type="text ic-input-btn" class="form-control ic-last-name" id="" aria-describedby="" placeholder="Last Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group input-right">
                                                                            <input type="text ic-input-btn" class="form-control ic-company-name" id="" aria-describedby="" placeholder="Company Name">
                                                                        </div>
                                                                        <div class="form-group input-right">
                                                                            <input type="text ic-input-btn" class="form-control ic-stree-address" id="" aria-describedby="" placeholder="Street Address">
                                                                        </div>
                                                                        <div class="ic-inline">
                                                                        <div class="form-group">
                                                                            <input type="text ic-input-btn" class="form-control ic-city-name" id="" aria-describedby="" placeholder="City">
                                                                        </div><span class="ic-semicolon">,</span>
                                                                        <div class="form-group">
                                                                            <input type="text ic-input-btn" class="form-control ic-state" id="" aria-describedby="" placeholder="State">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group input-right">
                                                                            <input type="text ic-input-btn" class="form-control ic-zip-code" id="" aria-describedby="" placeholder="ZIP Code">
                                                                        </div>
                                                                        <div class="form-group input-right">
                                                                            <div class="form-group country-state">
                                                                                <div class="ic-select-div theme-select">
                                                                                    <select class="ic-select" data-placeholder="United States">
                                                                                        <option value=""></option>
                                                                                        <option value="Alaska">Alaska</option>
                                                                                        <option value="Arkansas">Arkansas</option>
                                                                                        <option value="California">California</option>
                                                                                        <option value="Alaska">Alaska</option>
                                                                                        <option value="Arkansas">Arkansas</option>
                                                                                        <option value="California">California</option>
                                                                                        <option value="Alaska">Alaska</option>
                                                                                        <option value="Arkansas">Arkansas</option>
                                                                                        <option value="California">California</option>
                                                                                        <option value="Alaska">Alaska</option>
                                                                                        <option value="Arkansas">Arkansas</option>
                                                                                        <option value="California">California</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="ic-country">
                                                                            <li>Option 1</li>
                                                                            <li>Option 2</li>
                                                                            <li>Option 3</li>
                                                                            <li>Option 4</li>
                                                                            <li>Option 5</li>
                                                                            <li>Option 6</li>
                                                                        </ul>	
                                                                        <ul class="ic-select-custom-dropdown ic-right-ul">
                                                                            <!-- <li class="placeholder">dfdf</li> -->
                                                                            <li data-value="value 1" class="li-one">
                                                                                <div class="ic-full-content-person">
                                                                                    <div class="ic-left-content-text ic-single-line">
                                                                                        <div class="ic-text-inner">
                                                                                            AB
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ic-right-content-text">
                                                                                        <div class="ic-client-name ic-single-line">
                                                                                            arif billah
                                                                                        </div><br>
                                                                                        <div class="ic-first-last-nam ic-single-line">
                                                                                            <div class="ic-client-first-name ic-text-color d-inline-block ic-hide">arif</div>
                                                                                            <div class="ic-client-last-name ic-text-color d-inline-block ic-hide">billah billah</div>
                                                                                        </div>
                                                                                        <div class="ic-client-company-name ic-text-color ic-single-line">ItClan</div>
                                                                                        <div class="ic-client-email ic-text-color ic-single-line">
                                                                                            absojol@gmail.com
                                                                                        </div>
                                                                                        <div class="ic-client-street-address ic-hide ic-single-line">Nikunjo</div>
                                                                                            <div class="ic-client-city ic-hide ic-single-line">Dhaka</div>
                                                                                            <div class="ic-client-state ic-hide ic-single-line">Arizona</div>
                                                                                        <div class="ic-client-zip-code ic-hide ic-single-line">1207</div>
                                                                                        <div class="ic-client-country ic-hide ic-single-line">Bangladesh</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li data-value="value 2" class="li-one-two">
                                                                                <div class="ic-full-content-person">
                                                                                    <div class="ic-left-content-text ic-single-line">
                                                                                        <div class="ic-text-inner">
                                                                                            SB
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ic-right-content-text">
                                                                                        <div class="ic-client-name ic-single-line">
                                                                                            Sakib Hossain
                                                                                        </div><br>
                                                                                        <div class="ic-first-last-nam ic-single-line">
                                                                                            <div class="ic-client-first-name ic-text-color d-inline-block ic-hide">Sakib</div>
                                                                                            <div class="ic-client-last-name ic-text-color d-inline-block ic-hide">Hossain</div>
                                                                                        </div>
                                                                                        <div class="ic-client-company-name ic-text-color ic-single-line">Naresh It</div>
                                                                                        <div class="ic-client-email ic-text-color ic-single-line">
                                                                                            sakib@gmail.com
                                                                                        </div>
                                                                                        <div class="ic-client-street-address ic-hide ic-single-line">Mohakhali</div>
                                                                                        <div class="ic-client-city ic-hide ic-single-line">Dhaka</div>
                                                                                        <div class="ic-client-state ic-hide ic-single-line">Arizona</div>
                                                                                        <div class="ic-client-zip-code ic-hide ic-single-line">1209</div>
                                                                                        <div class="ic-client-country ic-hide ic-single-line">Bangladesh</div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <ul class="ic-edit-change-client ic-right-ul">
                                                                            <li>
                                                                                <div class="ic-full-content-person ic-edit-client">
                                                                                <i class="fa fa-pencil" aria-hidden="true"></i>Edit Client
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="ic-full-content-person ic-change-client">
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>Change Client
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- tab content end -->
                                                                </div>
                                                                <!-- tab view end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single block -->
                                            <div class="ic-single-block-asidebar">
                                                <div class="ic-text ic-invoice-label">Invoice Number</div>
                                                <div class="form-group input-right">
                                                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Last Name">
                                                </div>
                                            </div>
                                             <!-- single block -->
                                             <div class="ic-single-block-asidebar">
                                                <div class="ic-text ic-invoice-label">Date of Issue</div>
                                                <div class="form-group input-right ic-dtpckr-form-group">
                                                    <input  class="form-control ic-datepicker" placeholder="" value="07/23/2019">
                                                </div>
                                            </div>
                                            <!-- single block -->
                                            <div class="ic-single-block-asidebar">
                                                <div class="ic-text ic-invoice-label">Date of Issue</div>
                                                <div class="form-group input-right ic-dtpckr-form-group">
                                                    <input  class="form-control ic-datepicker-two" placeholder="" value="07/23/2019">
                                                </div>
                                            </div>
                                            <!-- single block -->
                                            <div class="ic-single-block-asidebar">
                                                <div class="ic-text ic-invoice-label">Reference</div>
                                                <div class="form-group input-right">
                                                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter value (e.g. PO #)">
                                                </div>
                                            </div>
                                        </aside>
                                        <article class="ic-invoice-content">
                                            <div class="app">
                                                <div class="">
                                                <table class="table">
                                                    <tr>
                                                        <th style="width:30%" class="ic-text ic-invoice-label">Description</th>
                                                        <th  style="width:25%" class="ic-text ic-invoice-label">Rate</th>
                                                        <th  style="width:20%" class="ic-text ic-invoice-label">Qty</th>
                                                        <th style="width:20%" class="ic-text ic-invoice-label">Line Total</th>
                                                        <th  style="width:5%" class="ic-text ic-invoice-label"></th>
                                                    </tr>
                                                    <!-- <tr v-for="(p,i) in packings"> -->
                                                    <tr>
                                                        <td  style="width:30%" >
                                                            <div class="ic-full-input">
                                                                <textarea placeholder="Enter notes or bank transfer details (optional)" rows="1" class="textarea ic-textarea-btn" autofocus onkeyup="filter()"></textarea>
                                                                <ul class="ic-select-custom-dropdown">
                                                                    <!-- <li class="placeholder">dfdf</li> -->
                                                                    <li data-value="value 1" class="li-one">Option 1</li>
                                                                    <li data-value="value 2" class="li-two">klo 2</li>
                                                                    <li data-value="value 3" class="li-three">spzi 3</li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td style="width:25%">
                                                            <input type="number" class="form-control" placeholder="$0.00">
                                                        </td>
                                                        <td style="width:20%">
                                                            <!-- <input type="number" class="form-control"  v-model="p.qty" > -->
                                                            <input type="number" class="form-control"  value="1" >
                                                        </td>
                                                        <td style="width:20%">
                                                            <input type="number" class="form-control" placeholder="$0.00">
                                                        </td>
                                                        <!-- <td tyle="width:5%" class="del-cnt">
                                                            <button class="del" @click="packings.splice(i,1)">x</button>
                                                        </td> -->
                                                        <td tyle="width:5%" class="del-cnt">
                                                            <button class="del">x</button>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                    <tr>
                                                        <td  style="width:30%" >
                                                            <div class="ic-full-input">
                                                                <textarea placeholder="Enter notes or bank transfer details (optional)" rows="1" class="textarea ic-textarea-btn" autofocus></textarea>
                                                                <ul class="ic-select-custom-dropdown">
                                                                    <!-- <li class="placeholder">dfdf</li> -->
                                                                    <li data-value="value 1" class="li-one">Option 1</li>
                                                                    <li data-value="value 2" class="li-two">Option 2</li>
                                                                    <li data-value="value 3" class="li-three">Option 3</li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td style="width:25%">
                                                            <input type="number" class="form-control" placeholder="$0.00">
                                                        </td>
                                                        <td style="width:20%">
                                                            <!-- <input type="number" class="form-control"  v-model="p.qty" > -->
                                                            <input type="number" class="form-control"  value="1" >
                                                        </td>
                                                        <td style="width:20%">
                                                            <input type="number" class="form-control" placeholder="$0.00">
                                                        </td>
                                                        <!-- <td tyle="width:5%" class="del-cnt">
                                                            <button class="del" @click="packings.splice(i,1)">x</button>
                                                        </td> -->
                                                        <td tyle="width:5%" class="del-cnt">
                                                            <button class="del">x</button>
                                                        </td>
                                                    </tr>
                                                    <tr >
                                                    <!-- <td style="background-color: rgba(0,0,0,0);padding:0;" colspan=2><button class="close-btn-tbl" @click="tambah"><b>+</b>add</button></td> -->
                                                    <td style="background-color: rgba(0,0,0,0);padding:0;" colspan=2><button class="close-btn-tbl"><b>+</b>add</button></td>
                                                    </tr>
                                                </table>
                                                
                                                </div>
                                            </div>
                                            <div class="tax-and-discount">
                                                <div class="col-one">
                                                    <div class="ic-add-discount-full">
                                                        <div class="ic-add-discount-btn">
                                                            <span class="ic-add-text">Add </span> Discount
                                                        </div>
                                                        <div class="ic-add-discount-dropdown">
                                                            <div class="ic-heading-discount ic-discount">
                                                                Add a Discount
                                                            </div>
                                                            <div class="ic-body-discount ic-discount">
                                                                <div class="ic-percentage">
                                                                    <div class="only-percentage">
                                                                        <input type="number" placeholder="0" class="ic-percentage-input"><span class="sign-percentage">%</span>
                                                                    </div>    
                                                                <span>of invoice subtotal <span>
                                                                </div>
                                                            </div>
                                                            <div class="ic-footer-discount ic-discount">
                                                                <button class="ic-canel-add-discount" >Cancel</button>
                                                                <button class="ic-add-discount-btn" type="submit">add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>tax</div>
                                                </div>
                                                <div class="col-two">
                                                    <div class="ic-for-discount"></div>
                                                    <div class="ic-for-tax" ><span>0.00</span></div>
                                                </div>
                                            </div>
                                            <!-- single block -->
                                            <div class="ic-single-block-contentbar">
                                                <div class="ic-text ic-invoice-label">Notes</div>
                                                <div class="form-group input-left">
                                                    <textarea placeholder="Enter notes or bank transfer details (optional)" rows="1" class="textarea"></textarea>
                                                </div>
                                            </div>
                                             <!-- single block -->
                                             <div class="ic-single-block-contentbar">
                                                <div class="ic-text ic-invoice-label">Terms</div>
                                                <div class="form-group input-left">
                                                    <textarea placeholder="Enter your terms and conditions. (Pro tip: It pays to be polite. FreshBooks invoices that include “please” and “thanks” get paid up to 2 days faster.)" class="textarea"></textarea>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- invoice body end-->
                            </div>
                        </section>
                        <!-- invoice end -->
                    </div>
                    <div class="col-md-3 col-lg-3">
                        
                    </div>
                </div>
            </form> 
        </div>
    </div>
</main>


<!-- Required JavaScript Libr
aries -->
<?php include('footer.php'); ?>
