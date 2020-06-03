<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    
    <title>大学生就业意向调查问卷</title>
    <link href="bootstrap-3.3.7\dist\css\bootstrap.min.css" rel="stylesheet" />
   
    <link href="ComputerAnswer.css" rel="stylesheet" />
    <style>
        .questionnaire_question_item{
            padding-top:16px;
        }
    </style>
</head>
<body>
    <?php 
        session_start();
     ?>
        <div style="position:fixed;margin:auto;left:0; right:0; top:0;width:850px; text-align:center;z-index:10000;">
            <div class="progress" style="margin-bottom:0px;height:15px;border-radius:0px;opacity:1">
                <div class="progress-bar  progress-bar-success" role="progressbar" id="progressbarDiv" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;line-height:initial;">
                    0%
                </div>
            </div>
        </div>
<form style="margin-top:15px;" id="index" name="index" data-isShowOptionIndex="1" method="post" action="index.php">

            
            <div class="questionnaire_title">
                 <span class="questionnaire_question_item_name_name">
                     <?php 
                        if(isset($_SESSION['username']))
                        {
                            echo "欢迎您！".$_SESSION['username'];

                            


                        }
                        else{
                            echo "您未登录，请先<a href='login.php'>登录</a>";
                        }
                      ?>
                 </span>
                <div class="questionnaire_title_name">
                大学生就业意向调查问卷
                </div>
            </div>

            <div class="questionnaire_content">
                
                <div class="questionnaire_summary">
                    <span style="color:#4C4C4C;font-family:&quot;line-height:24px;background-color:#FFFFFF;">您好，我们正在进行一项关于大学生就业的调查，想邀请您用几分钟时间帮忙填答这份问卷。本问卷实行匿名制，所有数据只用于统计分析， 请您放心填写。题目选项无对错之分，请您按自己的实际情况填写。谢谢您的帮助。</span>
                </div>

                <div class="questionnaire_question">
                    <div class="questionnaire_question_item danxuanti isMustInputDiv "  logic="" id="questionItem_1334">

                        <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">1.</span>
                                    <span class="questionnaire_question_item_name_name">您的性别？</span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                        </div>

                        <div class="questionnaire_question_item_option">
                            <div class="questionnaire_question_item_option_option" style="width:49%">
                                           
                                <label data-qid="1334" for="question_danxuan_1334_2987" class="questionnaire_question_item_option_option_label">
                                <input data-qid="1334" type="radio" value="男" name="usersex" id="question_danxuan_1334_2987" class="questionnaire_question_item_option_option_radio" />
                                            男
                                </label>
                                          
                            </div>
                            <div class="questionnaire_question_item_option_option" style="width:49%">
                                           
                                <label data-qid="1334" for="question_danxuan_1334_2988" class="questionnaire_question_item_option_option_label">
                                <input data-qid="1334" type="radio" value="女" name="usersex" id="question_danxuan_1334_2988" class="questionnaire_question_item_option_option_radio" />
                                            女
                                </label>
                                          
                            </div>


                        </div>

                    </div>
                    <div class="questionnaire_question_item tiankongti isMustInputDiv"  logic="" id="questionItem_1335">
                        <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">2.</span>
                                    <span class="questionnaire_question_item_name_name">您的年龄?</span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                        </div>
                        <div class="questionnaire_question_item_tiankong">
                                        <input data-qid="1335" type="number" name="userage" id="question_tiankong_1335"  style="width:100px" data-type="3" class="form-control" data-min="0" data-max="150" data-diget="0" />
                        </div>
                    </div>

                     <div class="questionnaire_question_item danxuanti isMustInputDiv "  logic="" id="questionItem_1336">


                     
                                <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">3.</span>
                                    <span class="questionnaire_question_item_name_name">以下哪项描述符合你毕业后的去向安排？</span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                                </div>
                                <!-- <div class="questionnaire_question_item_option"> -->
                                <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                    <label data-qid="1336" for="question_danxuan_1336_2989" class="questionnaire_question_item_option_option_label">
                                    <input data-qid="1336" type="radio" value="就业" name="userwhere_go" id="question_danxuan_1336_2989" class="questionnaire_question_item_option_option_radio" />
                                            就业
                                    </label>
                                          
                                </div>
                                <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                    <label data-qid="1336" for="question_danxuan_1336_2990" class="questionnaire_question_item_option_option_label">
                                    <input data-qid="1336" type="radio" value="自主创业" name="userwhere_go" id="question_danxuan_1336_2990" class="questionnaire_question_item_option_option_radio" />
                                             自主创业
                                    </label>
                                          
                                </div>
                                <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                    <label data-qid="1336" for="question_danxuan_1336_2991" class="questionnaire_question_item_option_option_label">
                                    <input data-qid="1336" type="radio" value="考研" name="userwhere_go" id="question_danxuan_1336_2991" class="questionnaire_question_item_option_option_radio" />
                                            考研
                                    </label>
                                          
                                </div>
                                <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                <label data-qid="1336" for="question_danxuan_1336_2992" class="questionnaire_question_item_option_option_label">
                                    <input data-qid="1336" type="radio" value="出国" name="userwhere_go" id="question_danxuan_1336_2992" class="questionnaire_question_item_option_option_radio" />
                                            出国
                                </label>
                                          
                                </div>

                            </div>



                     </div>
                     <div class="questionnaire_question_item xialacaidanti isMustInputDiv"  logic="" id="questionItem_1337">
                        <div class="questionnaire_question_item_name">
                            <span class="questionnaire_question_item_name_index">4.</span>
                            <span class="questionnaire_question_item_name_name">你就读的学校所在省份是？</span>
                            <span class="questionnaire_question_item_name_mustinput">*</span>
                            </div>
                                <div class="questionnaire_question_item_xialacaidan">
                                    <select data-qid="1337" class="form-control" name="userprovince" id="question_xialacaidan_1337">
                                        <option value="0">--请选择--</option>
                                            <option value="北京市"> 北京市</option>
                                            <option value="上海市">上海市</option>
                                            <option value="天津市">天津市</option>
                                            <option value="重庆市">重庆市</option>
                                            <option value="黑龙江省">黑龙江省</option>
                                            <option value="吉林省">吉林省</option>
                                            <option value="辽宁省">辽宁省</option>
                                            <option value="内蒙古">内蒙古</option>
                                            <option value="河北省">河北省</option>
                                            <option value="新疆">新疆</option>
                                            <option value="甘肃省">甘肃省</option>
                                    </select>
                                </div>
                               
                    </div>
                    <div class="questionnaire_question_item danxuanti isMustInputDiv "  logic="" id="questionItem_1339">
                                <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">5.</span>
                                    <span class="questionnaire_question_item_name_name">你首选的就业方向是？</span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                                </div>
                                <div class="questionnaire_question_item_option">
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3041" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="政府机关" name="userjob" id="question_danxuan_1339_3041" class="questionnaire_question_item_option_option_radio" />
                                             政府机关
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3042" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="学校及科研研究所" name="userjob" id="question_danxuan_1339_3042" class="questionnaire_question_item_option_option_radio" />
                                             学校及科研研究所
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3043" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="其他事业单位" name="userjob" id="question_danxuan_1339_3043" class="questionnaire_question_item_option_option_radio" />
                                            其他事业单位
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3044" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="国有企业" name="userjob" id="question_danxuan_1339_3044" class="questionnaire_question_item_option_option_radio" />
                                            国有企业
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3045" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="外资企业" name="userjob" id="question_danxuan_1339_3045" class="questionnaire_question_item_option_option_radio" />
                                            外资企业
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3046" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="民营企业" name="userjob" id="question_danxuan_1339_3046" class="questionnaire_question_item_option_option_radio" />
                                            民营企业
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3047" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="部队" name="userjob" id="question_danxuan_1339_3047" class="questionnaire_question_item_option_option_radio" />
                                            部队
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3048" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="自主创业" name="userjob" id="question_danxuan_1339_3048" class="questionnaire_question_item_option_option_radio" />
                                            自主创业
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                            <label data-qid="1339" for="question_danxuan_1339_3049" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1339" type="radio" value="其他" name="userjob" id="question_danxuan_1339_3049" class="questionnaire_question_item_option_option_radio" />
                                            其他
                                            </label>
                                          
                                        </div>
                                </div>
                            </div>
                                <div class="questionnaire_question_item tiankongti isMustInputDiv"  logic="" id="questionItem_1338">
                                <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">6.</span>
                                    <span class="questionnaire_question_item_name_name">你希望在哪个城市就业？</span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                                </div>
                                 <div class="questionnaire_question_item_tiankong">
                                        <input data-qid="1338" type="text" name="userjob_city" id="question_tiankong_1338"  style="width:200px" data-type="1" class="form-control" data-min="0" data-max="0" data-diget="0" />
                                </div>
                                <div data-qid="1338" class="questionnaire_question_item_tiankong_errorInfo" style="color:red;font-size:14px;">

                                </div>
                                 </div>
                                                        </div>
                                                        <div data-qid="1340" class="questionnaire_question_item_juzhen_errorInfo" style="color:red;font-size:14px;">

                                                        </div>
                                                    </div>
                            <div class="questionnaire_question_item duoxuanti isMustInputDiv   "  logic="" id="questionItem_1341" max="0" min="0">
                                <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">7.</span>
                                    <span class="questionnaire_question_item_name_name">
                                        你认为影响就业最重要的因素是什么？
                                       
                                    </span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                                </div> 
                                <div class="questionnaire_question_item_option">
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                          
                                            <label data-qid="1341" for="question_duoxuan_1341_3032" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1341" type="radio" value="学校知名度" name="userjob_factory" id="question_duoxuan_1341_3032" class="questionnaire_question_item_option_option_radio" />
                                            学校知名度
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                          
                                            <label data-qid="1341" for="question_duoxuan_1341_3033" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1341" type="radio" value="专业知识" name="userjob_factory" id="question_duoxuan_1341_3033" class="questionnaire_question_item_option_option_radio" />
                                            专业知识
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                          
                                            <label data-qid="1341" for="question_duoxuan_1341_3034" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1341" type="radio" value="实践和工作经验" name="userjob_factory" id="question_duoxuan_1341_3034" class="questionnaire_question_item_option_option_radio" />
                                            实践和工作经验
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                          
                                            <label data-qid="1341" for="question_duoxuan_1341_3035" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1341" type="radio" value="社会关系" name="userjob_factory" id="question_duoxuan_1341_3035" class="questionnaire_question_item_option_option_radio" />
                                            社会关系
                                            </label>
                                          
                                        </div>
                                        <div class="questionnaire_question_item_option_option" style="width:100%">
                                          
                                            <label data-qid="1341" for="question_duoxuan_1341_3036" class="questionnaire_question_item_option_option_label">
                                                <input data-qid="1341" type="radio" value="沟通表达能力" name="userjob_factory" id="question_duoxuan_1341_3036" class="questionnaire_question_item_option_option_radio" />
                                            沟通表达能力
                                            </label>
                                          
                                        </div>
                                        
                                </div>
                            </div>

                                <div class="questionnaire_question_item tiankongti isMustInputDiv"  logic="" id="questionItem_1342">
                                <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">8.</span>
                                    <span class="questionnaire_question_item_name_name">你认为目前的就业环境怎么样？</span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                                </div>
                                <div class="questionnaire_question_item_tiankong">
                                        <textarea data-qid="1342" name="userjob_enviroment" id="question_tiankong_1342" style="height:120px;width:100%" data-type="2" class="form-control"></textarea>
                                </div>
                                <div data-qid="1342" class="questionnaire_question_item_tiankong_errorInfo" style="color:red;font-size:14px;">

                                </div>
                           

                                </div>


                                <!-- 可补充内容 -->
                                <?php 
                                    if(isset($_SESSION['item']))
                                    {
                                        $item=$_SESSION['item'];
                                        $option1=$_SESSION['option1'];
                                        $option2=$_SESSION['option2'];
                                        $option3=$_SESSION['option3'];
                                ?>

                                <div class="questionnaire_question_item danxuanti isMustInputDiv "  logic="" id="questionItem_1336">


                     
                                <div class="questionnaire_question_item_name">
                                    <span class="questionnaire_question_item_name_index">9.</span>
                                    <span class="questionnaire_question_item_name_name"><?php echo $item ?></span>
                                    <span class="questionnaire_question_item_name_mustinput">*</span>
                                </div>
                                <!-- <div class="questionnaire_question_item_option"> -->
                                <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                    <label data-qid="1336" for="question_danxuan_1" class="questionnaire_question_item_option_option_label">
                                    <input data-qid="1336" type="radio" value="就业" name="userwhere_go" id="question_danxuan_1" class="questionnaire_question_item_option_option_radio" />
                                            <?php echo $option1 ?>
                                    </label>
                                          
                                </div>
                                <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                    <label data-qid="1336" for="question_danxuan_2" class="questionnaire_question_item_option_option_label">
                                    <input data-qid="1336" type="radio" value="自主创业" name="userwhere_go" id="question_danxuan_2" class="questionnaire_question_item_option_option_radio" />
                                            <?php echo $option2; ?>
                                    </label>
                                          
                                </div>
                                <div class="questionnaire_question_item_option_option" style="width:100%">
                                           
                                    <label data-qid="1336" for="question_danxuan_1336_3" class="questionnaire_question_item_option_option_label">
                                    <input data-qid="1336" type="radio" value="考研" name="userwhere_go" id="question_danxuan_1336_3" class="questionnaire_question_item_option_option_radio" />
                                            <?php echo $option3 ?>
                                    </label>
                                          
                                </div>
                                

                            </div>



                     </div>
                     <?
                 }
                     ?>




    </div>
</div>


            <div style="text-align:center;margin:10px 12px 20px 12px; ">

                <div style="clear:both;height:10px;"></div>
                <button type="submit" class="btn btn-primary" style="width:200px;border-radius:0px;margin-top:10px;" name="ok">
                    <text>提交</text>
                </button>
            </div>
</form>
           

           <?php 
            
            include 'util.php';


                
                if(isset($_POST['ok']))

                {

                    if(isset($_SESSION['username']))
                    {
                            
                            $username=$_SESSION['username'];

                            $usersex=$_POST['usersex'];
                            $userage=$_POST['userage'];
                            $userwhere_go=$_POST['userwhere_go'];
                            $userprovince=$_POST['userprovince'];
                            $userjob=$_POST['userjob'];
                            $userjob_city=$_POST['userjob_city'];
                            $userjob_factory=$_POST['userjob_factory'];
                            $userjob_enviroment=$_POST['userjob_enviroment'];
                            $acctime=date("Y.m.d");

                        $sql = "INSERT INTO wqinfo(username,usersex,userage,userwhere_go,userprovince,userjob,userjob_city,userjob_factory,userjob_enviroment,acctime) VALUES ('$username','$usersex','$userage','$userwhere_go','$userprovince','$userjob','$userjob_city','$userjob_factory','$userjob_enviroment','$acctime')";

                        adduser($sql);

                        echo '<script language="JavaScript">;alert("提交成功！");location.href="mine.php";</script>;';


                    }else{

                        echo '<script language="JavaScript">;alert("您未登录，请先登录!");location.href="login.php";</script>;';


                    }

                                        
                    
                        
                         

                     
                    


                    


                    
                    // echo "usersex:".$usersex;
                    // echo "userage:".$userage;
                    // echo "userwhere_go:".$userwhere_go;
                    // echo "userprovince:".$userprovince;
                    // echo "userjob:".$userjob;
                    // echo "userjob_city:".$userjob_city;
                    // echo "userjob_factory:".$userjob_factory;
                    // echo "userjob_enviroment:".$userjob_enviroment;
                    // echo "time:".$time;
 

             }

            ?>





</body>
</html>