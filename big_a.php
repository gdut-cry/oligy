<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>输出信息页面</title>
    <style type="text/css" >
        .s1 {
            font-size: 20px;
        }
        table {
            margin-top: 100px;
            background-color: #FFFF86;
        }
        body {
            background-image:url(1.png);
            background-size:100% 100%;
        }
    </style>
</head>
<body>
<table align="center" border="10px" cellpadding="10px">
    <tr>
        <td align="center" colspan="2"><span class="s1">您输入的信息如下：</span></td>
    </tr>
    
    <tr>
        <td align="center">用户登陆名</td>
        <td><?php echo $_POST["username"]; ?></td>
    </tr>
    
    <tr>
        <td width="100px" align="center">真实姓名</td>
        <td width="400px"><?php echo $_POST["name"]; ?></td>
    </tr>

    <tr>
        <td width="100px" align="center">年龄</td>
        <td width="400px"><?php echo $_POST["age"]; ?></td>
    </tr>
    
    <tr>
        <td width="100px" align="center">出生日期</td>
        <td width="400px"><?php echo $_POST["birth"]; ?></td>
    </tr>
    
    <tr>
        <td width="100px" align="center">电子邮箱</td>
        <td width="400px"><?php echo $_POST["email"]; ?></td>
    </tr>
    
    <tr>
        <td width="100px" align="center">手机号码</td>
        <td width="400px"><?php echo $_POST["phone"]; ?></td>
    </tr>
    
    <tr>
        <td width="100px" align="center">兴趣爱好</td>
        <td width="400px"><?php echo $_POST["hobby"]; ?></td>
    </tr>

    <tr>
        <td align="center">地区</td>
        <td><?php echo $_POST["province"].$_POST["city"]; ?></td>
    </tr>
    <tr>
        <td align="center">留言</td>
        <td><?php echo $_POST["liuyan"];?></td>
    </tr>
</table>
</body>
</html>