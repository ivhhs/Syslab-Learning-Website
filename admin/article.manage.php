<?php
    include('../header.php');
    require_once ('../connect.php');
    $sql = "select * from article order by datetime desc";
    $query = mysql_query($sql);
    if($query&&mysql_num_rows($query)){
    	while($row = mysql_fetch_array($query)){
    		$data[] = $row;
    	}
    }
    else{
    	$data = array();
    }
?>

<div id="pagebody">
            <div id="listview" style="text-align:center">
                <form  name="form1" method="post" action=""> 
                    <div >
                        <div class="showimage" ><img id="show1" class="headerimg" src="http://localhost/Blogtttttttt/outlet/images/img8.gif" ></img>
                        </div>
                        <div class="showimage"><img id="show2" class="headerimg" src="http://localhost/Blogtttttttt/outlet/images/img9.gif" ></img>
                        </div>
                        <div class="showimage"><img id="show3" class="headerimg" src="http://localhost/Blogtttttttt/outlet/images/img10.gif" ></img>
                        </div>
                    </div>
                </form>
            </div>
            <div id="sidebar">
                <div class="part-linkchinese" id="firstone" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)"><a href="person.php">个人主页</a>
                </div>
                <div class="part-linkchinese" id="firsttwo" onMouseDown = "opentableone()" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)">前端技术
                </div>
                <div class="part-linkchinese" id="firstthree" onMouseDown = "opentabletwo()" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)">后端开发
                </div>
                <div class="part-linkchinese" id="firstfour" onMouseDown = "opentablethree()" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)">软件教程
                </div>
                <div class="part-linkchinese" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)" onMouseDown = "openpageone()"><a href="http://localhost/Blogtttttttt/团队动态.html">团队动态</a>
                </div>
                <div class="part-linkchinese" onMouseOver = "buttonin(this)" onMouseOut = "buttonout(this)" onMouseDown = "openpagetwo()"><a href="http://localhost/Blogtttttttt/关于我们.html">关于我们</a>
                </div>
            </div>
            <div id="table1">
                <div class="part-linkenglish" >HTML/HTML5
                </div>
                <div class="part-linkenglish">CSS
                </div>
                <div class="part-linkenglish" >Javascript
                </div>
                <div class="part-linkenglish" >Node.js
                </div>
                <div class="part-linkchinese" id="twoback" onMouseDown = "closetableone()" onMouseOver="buttonin(this)" onMouseOut="buttonout(this)">返回上级
                </div>
            </div>
            <div id="table2">
                <div class="part-linkenglish" >PHP
                </div>
                <div class="part-linkenglish">Python
                </div>
                <div class="part-linkenglish" >Java
                </div>
                <div class="part-linkenglish" >Mysql
                </div>
                <div class="part-linkchinese" id="threeback" onMouseDown = "closetabletwo()" onMouseOver="buttonin(this)" onMouseOut="buttonout(this)">返回上级
                </div>
            </div>
            <div id="table3">
                <div class="part-linkenglish" >Photoshop
                </div>
                <div class="part-linkenglish">Github
                </div>
                <div class="part-linkenglish" >Sublime
                </div>
                <div class="part-linkenglish" >vim
                </div>
                <div class="part-linkchinese" >其他
                </div>
                <div class="part-linkchinese" id="fourback" onMouseDown = "closetablethree()" onMouseOver="buttonin(this)" onMouseOut="buttonout(this)">返回上级
                </div>
            </div>
            <div id="mainbody">
                <div id="articlelist" >博文列表
                </div>
                <br>
                <br>
                <div>
                    <ul class="sortfunction" style="list-style-type:none">
                        <input type="button" value="按时间" style="float:left;margin-right:10px;color:#CC00CC">
                        <li style="width:1px;height:20px;background-color:#000000;float:left;">
                        </li>
                        <input type="button" value="按关注度" style="float:left;margin-right:10px;margin-left:10px;color:#CC00CC">
                        <li style="width:1px;height:20px;background-color:#000000;float:left;">
                        </li>
                        <input type="button" value="按类型" style="float:left;margin-left:10px;color:#CC00CC">
                    </ul>
                </div>
                <br>
<?php
    
    foreach($data as $row){
?>
        <div class="articlelist1">
                <ul style="list-style-type:none;">
                            <li class="bowenstyle" >
                                <div><img class="bowenimage" src="http://localhost/Blogtttttttt/outlet/images/shili.gif" >
                                </div>
                                    <br>
                                    <div style="color:#808080;font-size:80%" >分类：<?php echo $row['description'] ;?>
                                    </div>
                                    <br>
                                    <div style="font-size:150%"><a href="http://localhost/Blogtttttttt/article.show.php?id=<?php echo $row['id']?>" ><?php echo $row['title']; ?></a>
                                    </div>
                                    <br>
                                    <div>作者 <?php echo $row['author'];?>
                                    </div>
                                    <br>
                                    <div>发布时间 <?php echo $row['datetime']?></div>
                                    <a href="article.delete.handle.php?id=<?php echo $row['id']?>">删除</a> <a href="article.modify.php?id=<?php echo $row['id']?>">修改</a>
                            </li>
                        </ul>
        </div>
<?
    }
?>
                
                <br>
                <br>
            </div>
        </div>
        <div id="footer">
            <center><a href="#" class="link1" onclick="goTop();return false;" style="font-family:“微软雅黑”;text-align:center;font-size:150%;color:#ffffff;">回到顶部</a></center>
            <form id="win" method="get">
                <table align="center" cellpadding="1" cellspacing="1" width="250" style="margin-top:20px">
                    <tr>
                        <th colspan="2">
                            Welcome to log-in
                            <hr size="1" />
                        </th>
                    </tr>
                    <tr>
                        <td align="right" widith:"100">邮箱：</td>
                        <td>
                            <input id="username" type="text" hint="姓名" />
                        </td>
                    <tr>
                    <tr>
                        <td align="right">密码：</td>
                        <td>
                            <input type="password" id="password" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <hr size="1"/>
                            <input type="submit" style="float:left;" value="登陆" >
                            <input type="reset"  style="float:center;" value="重置" >
                            <input type="button" style="float:right;" value="关闭" onMouseDown = "closeLogin()">
                        </td>
                    </tr>
                </table>
                <br><a href="javascript:closeLogin();" style="text-decoration: blink;color:#000000">关闭登录框</a></div>
            </form>
            <div>
                <input id="dingbubutton" type="button" value="TOP" onclick="goTop();return false;">
            </div>
        
        </div>
    </div>


    <script src="http://localhost/Blogtttttttt/outlet/javascript.js"></script>
</body>
</html>
	
    