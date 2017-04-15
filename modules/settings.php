<?php include '../base.php';?>
<?php startblock('page')?>
<h2>System Settings</h2>
<div class="row">
   <div class="col-md-12">
      <!-- conents==================================================-->
       <ul class="nav nav-tabs nav-justified pu-tab">
          <li class="active"> <a href="#panel-420130" data-toggle="tab"><i class="fa fa-cogs"></i> Feature settings</a>
          </li>
          <li> <a href="#panel-455050" data-toggle="tab"><i class="fa fa-language"></i> Language items (12)</a>
          </li>
       </ul>
       <div class="tab-content">
          <div class="tab-pane active" id="panel-420130">
             <table class="table">
                <thead>
                   <tr>
                      <th width="20%">Tags</th>
                      <th width="60%">Features</th>
                      <th width="20%">Value</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                      </td>
                      <td>
                         <h6><a href="#">Background checking</a></h6>
                         <p>Activates the background checking module</p>
                      </td>
                      <td> <div class="pu-toggle-btn pu-toggle-btn-green">
                            <label>
                                <input type="checkbox" checked><span></span>
                            </label>
                        </div>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                      </td>
                      <td>
                         <h6><a href="#">Remove background check assessments</a></h6>
                         <p>Enables clients to set a permission around whether a provider can delete
                            background checks or not
                         </p>
                      </td>
                      <td>
                         <div class="pu-toggle-btn pu-toggle-btn-green">
                            <label>
                                <input type="checkbox" checked><span></span>
                            </label>
                        </div>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                         <span
                            class="label label-default">conmunications</span>
                      </td>
                      <td>
                         <h6><a href="#">View background check results</a></h6>
                         <p>Activates the link to view a background check report via the applicant
                            card
                         </p>
                      </td>
                      <td> <div class="pu-toggle-btn pu-toggle-btn-green">
                            <label>
                                <input type="checkbox"><span></span>
                            </label>
                        </div>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                      </td>
                      <td>
                         <h6><a href="#">Cost centre</a></h6>
                         <p>Turns the cost centre field on when performing a background check</p>
                      </td>
                      <td> <div class="pu-toggle-btn pu-toggle-btn-green">
                            <label>
                                <input type="checkbox" checked><span></span>
                            </label>
                        </div>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                      </td>
                      <td>
                         <h6><a href="#">Additional report recipients</a></h6>
                         <p>Activates the 'additional report recipient' field when you move an applciant's
                            status into 'background checking' ... <i class="fa fa-info-circle" title="Activates the 'additional report recipient' field when you move an applciant's status into 'background checking'. From this page, you can select the checks to be complete and add an additional recipient to have access to the report summary via the applicant card. Please note, this user does not receive any background checking emails - it simply gives them access to the report on the app card."></i>
                         </p>
                      </td>
                      <td> <div class="pu-toggle-btn pu-toggle-btn-green">
                            <label>
                                <input type="checkbox"><span></span>
                            </label>
                        </div>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                      </td>
                      <td>
                         <h6><a href="#">Restrict background check results to requester</a></h6>
                         <p>Activate to only allow the person who initiated the background check to
                            view the result details of a background check.
                         </p>
                      </td>
                      <td> <div class="pu-toggle-btn pu-toggle-btn-red">
                            <label>
                                <input type="checkbox" checked><span></span>
                            </label>
                        </div>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                      </td>
                      <td>
                         <h6><a href="#">Link expiry days</a></h6>
                         <p>When a background check is requested we are provided with a link for an
                            applicant to complete a check. The value of this feature is the number
                            of days this link is available to use
                         </p>
                      </td>
                      <td>
                         <input type="text" value="7" size="1" />
                         <label label-default="label-default" for="ctl00_Main_lFMID_1194On">Days</label>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                         <span
                            class="label label-default">conmunications</span>
                      </td>
                      <td>
                         <h6><a href="#">Invitations</a></h6>
                         <p>Turns on sending of invitations for background checking module. This allows
                            users to send a link in the emails as a merge field.
                         </p>
                      </td>
                      <td> <div class="pu-toggle-btn pu-toggle-btn-green">
                            <label>
                                <input type="checkbox"><span></span>
                            </label>
                        </div>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> mandatory </span>
                      </td>
                      <td>
                         <h6><a href="#">Report link expiry days</a></h6>
                         <p>Hides the link to the background check report stored against the applicant
                            card after the number of days set in this feature has expired.
                         </p>
                      </td>
                      <td>
                         <input type="text" value="45" />
                      </td>
                   </tr>
                   <tr>
                      <td></td>
                      <td>
                         <h6><a href="#"><a href="ss-subpage.html">Background check packages</a></a></h6>
                      </td>
                      <td>
                         <a href="ss-subpage.html">
                            <h4>4</h4>
                         </a>
                      </td>
                   </tr>
                   <tr>
                      <td></td>
                      <td>
                         <h6><a href="#"><a href="ss-subpage.html">Applicant strengths</a></a></h6>
                      </td>
                      <td>
                         <a href="ss-subpage.html">
                            <h4>4</h4>
                         </a>
                      </td>
                   </tr>
                </tbody>
             </table>
          </div>
          <!-- ***************************************************************************************************************************************-
             -->
          <div class="tab-pane" id="panel-455050">
             <table class="table table-striped">
                <thead>
                   <tr>
                      <th>Tags</th>
                      <th>Key</th>
                      <th>Default</th>
                      <th>English Override</th>
                      <th>
                         <select id="lang">
                            <option selected="selected">Chinese</option>
                            <option>Thai</option>
                         </select>
                      </th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                      </td>
                      <td>BACKGROUND_CHECK_COMPLETE_CONFIRMATION</td>
                      <td>Thank you. You have successfully completed the online probity form. You
                         will be contacted shortly regarding your application.
                      </td>
                      <td class="editable"
                         contenteditable="true">Thank you. You have successfully completed the online probity form. We
                         will send you an email shortly.
                      </td>
                      <td class="editable" contenteditable="true"> <span class="zh">由第三方供应商进行在线廉洁检查，并为您的网上廉洁检查的要求，目前正在处理中。</span>
                         <span class="th hide">การตรวจสอบความซื่อสัตย์ออนไลน์จะดำเนินการโดยผู้ให้บริการบุคคลที่ 3 และขอตรวจสอบความซื่อสัตย์ของคุณออนไลน์อยู่ในขณะนี้กำลังดำเนินการ</span>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                      </td>
                      <td>BACKGROUND_CHECK_INVITE_TEXT</td>
                      <td>Congratulations! You have been invited to undertake a Probity check. Click
                         Begin to launch the online form. Once you have completed this form, you
                         will be asked to print, sign and fax the form to FirstAdvantage.
                      </td>
                      <td
                         class="editable" contenteditable="true"></td>
                      <td class="editable" contenteditable="true"> <span class="zh">由第三方供应商进行在线廉洁检查，并为您的网上廉洁检查的要求，目前正在处理中。</span>
                         <span class="th hide">การตรวจสอบความซื่อสัตย์ออนไลน์จะดำเนินการโดยผู้ให้บริการบุคคลที่ 3 และขอตรวจสอบความซื่อสัตย์ของคุณออนไลน์อยู่ในขณะนี้กำลังดำเนินการ</span>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                      </td>
                      <td>BACKGROUND_CHECK_LINK</td>
                      <td>Background check</td>
                      <td class="editable" contenteditable="true"></td>
                      <td class="editable" contenteditable="true"> <span class="zh">并为您的网上</span>
                         <span class="th hide">ารโดยผู้ให้บริ</span>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                      </td>
                      <td>BACKGROUNDCHECK_NOT_AVAILABLE</td>
                      <td>The background check request for this applicant has failed to be processed.
                         We were unable to contact the background check provider. This message will
                         be logged as a note in the applicant history and the background check request
                         record has been deleted. Please contact PageUp People Support
                      </td>
                      <td class="editable"
                         contenteditable="true"></td>
                      <td class="editable" contenteditable="true"> <span class="zh">由第三方供应商进行在线廉洁检查，并为您的网上廉洁检查的要求，目前正在处理中。</span>
                         <span class="th hide">การตรวจสอบความซื่อสัตย์ออนไลน์จะดำเนินการโดยผู้ให้บริการบุคคลที่ 3 และขอตรวจสอบความซื่อสัตย์ของคุณออนไลน์อยู่ในขณะนี้กำลังดำเนินการ</span>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> ApplicationStatusType </span>
                      </td>
                      <td>STATUS_BACKGROUNDCHECK</td>
                      <td>Background check</td>
                      <td class="editable" contenteditable="true"></td>
                      <td class="editable" contenteditable="true"> <span class="zh">目前正在处理</span>
                         <span class="th hide">กำลังดำเนินการ</span>
                      </td>
                   </tr>
                   <tr>
                      <td> <span class="label label-warning">backgroundchecking</span>
                         <span class="label label-default"> Contingent </span>
                      </td>
                      <td>EXISTING_BACKGROUND_CHECKS</td>
                      <td>Existing Background Checks</td>
                      <td class="editable" contenteditable="true"></td>
                      <td class="editable" contenteditable="true"> <span class="zh">的网上廉洁</span>
                         <span class="th hide">ห้บริการบุ</span>
                      </td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
   </div>
</div>
<?php endblock()?>
