<?php /* Smarty version Smarty-3.1.19, created on 2014-10-17 11:16:47
         compiled from "/var/www/html/linux4pkuss/linux4pkuss/templates/system_information/notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:402628917540b1c32d98a70-53871739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a62da00f5761863d820cb200b69d60513a8f17c5' => 
    array (
      0 => '/var/www/html/linux4pkuss/linux4pkuss/templates/system_information/notice.tpl',
      1 => 1413558946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '402628917540b1c32d98a70-53871739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540b1c32ddf973_22361907',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540b1c32ddf973_22361907')) {function content_540b1c32ddf973_22361907($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title>课程通知</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset=utf-8>
<!-- Bootstrap -->
<link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/bootstrap/bootstrap/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="/bootstrap/bootstrap/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/style-metro.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style-responsive.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/uniform.default.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/bootstrap/bootstrap/image/favicon.ico" />
<script src="/bootstrap/bootstrap/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/bootstrap.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/excanvas.min.js"></script>
<script src="/bootstrap/bootstrap/js/respond.min.js"></script>
<script src="/bootstrap/bootstrap/js/jquery.slimscroll.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.blockui.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.cookie.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.uniform.min.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.gritter.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.pulsate.min.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.bootpag.min.js"></script>
<script src="/bootstrap/bootstrap/js/app.js"></script>
<script src="/bootstrap/bootstrap/js/ui-general.js"></script>
<script src="/bootstrap/bootstrap/javascript/index.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		UIGeneral.init();
	});
</script>
</head>
<body>
	<header> <?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<div class="container-fluid" style="padding: 4% 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>课程通知
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newCourse">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
					</div>
				</div>
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>最新文章
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newArticle">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						
					</div>
				</div>
				<div class="portlet box purple">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>最新资源
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newReourse">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						
					</div>
				</div>

			</div>
			<div class="span6">
				<div class="portlet box red">

					<div class="portlet-title">

						<div class="caption">
							<i class="icon-comments"></i>课程通知
						</div>

						<div class="tools">

							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload"></a>
						</div>
					</div>
					<div class="portlet-body">
						<div id="pulsate-regular"><?php echo $_smarty_tpl->getConfigVariable('teacher');?>
（女） 副教授，博士 Email:
							jingqi@pku.edu.cn</div>
						<div class="row-fluid">
							<div class="span3">
								<!--Sidebar content-->
								<ul class="thumbnails">
									<li class="span12">
										<div class="thumbnail">
											<img data-src="holder.js/300x200" class="img-polaroid" alt=""
												src="http://115.28.11.118/linuxkernel/images/jingqi.jpg">
										</div>
									</li>
								</ul>
							</div>
							<div class="span9">
								<!--Body content-->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab1" data-toggle="tab">简历简介</a>
									<li><a href="#tab2" data-toggle="tab">授课方向</a>
									<li><a href="#tab3" data-toggle="tab">负责项目</a>
									<li><a href="#tab4" data-toggle="tab">发表论文</a>
									<li><a href="#tab5" data-toggle="tab">社会服务</a>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab1">
										<p>2009年1月－至今，北京大学软件与微电子学院</p>
										<p>2003年9月－2008年12月，北京大学信息科学技术学院，获理学博士学位</p>
										<p>2001年9月－2003年7月，哈尔滨工业大学计算机科学与技术学院，获工学硕士学位</p>
										<p>1993年9月－1997年7月，南开大学计算机系，获理学学士学位
										<hr>
										<p>一直致力于无线传感器网络/无线自组织网络的支撑技术以及安全体系研究，并在近年来拓展到物联网应用领域。历年来在无线传感器网络支撑技术、无线传感器网络密钥管理、无线传感器网络信任管理等方向都有论文发表，还参与著写了《From
											problem to solution: Wireless Sensor Networks
											Security》一书。作为项目负责人或项目实施负责人参与了国家自然科学基金、863、115、125、科技部国际科技合作重点项目等纵向课题，以及一系列与无线传感器网络和RFID应用相关的横向项目。参与了广州智能化城市管理与运行体系顶层设计，作为分课题负责人主持了总装十二五项目《基于XX感知的XXXX服务技术研究》。
										</p>
										<p>东北亚开源软件推进论坛第二工作组的核心成员，是中日韩开源软件课程大纲的中方主要撰写人。目前该大纲已经应用于韩国的OLC中心和日本的多个高校和培训机构。参与了《中文办公软件文档格式规范》（UOF）的研究工作，并作为项目实施负责人开展了ODF-UOF双向转换器的研制与开发，以及ODF-UOF比对文档的撰写和发布。作为项目实施负责人或骨干成员参与了多项与开源软件和开放标准相关的科研及工程项目，与IBM、Intel、红旗、中标软等国内外公司有着紧密合作。在产学研合作的基础上，主持了核高基重大专项《开源操作系统内核分析和安全性评估》任务一《Linux体系结构及内核功能模块间关系分析》。
										</p>
									</div>
									<div class="tab-pane" id="tab2">
										<h4>讲授课程</h4>
										<p>[1] Linux内核分析与驱动程序设计,研究生课程</p>
										<p>[2] 无线传感器网络及应用,研究生课程</p>
										<hr>
										<h4>研究方向</h4>

										<p>物联网软件开发</p>
										<p>社交网络分析</p>
										<p>开源软件与开放标准</p>
									</div>
									<div class="tab-pane" id="tab3">
										<p>1. 核高基重大专项《开源操作系统内核分析和安全性评估》 2012.9-2013.12</p>
										<p>2. 总装十二五《基于XX感知的XXXX服务技术研究》2011.7-2015.12</p>
										<p>3. 横向《****风险评估方法和工具研究》2011.7-2012.12</p>
										<p>4. 十一五项目《XXXX授权管理与访问控制系统》2006.1—2010.12</p>
										<p>5. IBM合作项目《Linux on POWER》 2005.4—2009.1</p>
										<p>6. 国家自然科学基金《无线传感器网络的安全体系结构研究》2007.1—2007.12</p>
										<p>7. 科技部政府间合作项目《普适计算中对等网络技术研究》2005.1—2007.12</p>
										<p>8. 国家科技攻关项目《国产基础软件技术培训系统研制与课程开发》2005.8—2007.6</p>
										<p>9. 国家863项目《XXXX网络信息安全技术》2006.11—2007.6</p>
										<p>10. IBM合作项目《Document Format Converter》 2005.11—2006.11
										</p>
										<p>11. 微软亚洲研究院资助项目《基于策略的移动设备安全应用框架》 2003.6—2004.6</p>
										<p>12. 国家863项目《动态联盟协同项目管理系统》2001.7—2003.7</p>
									</div>
									<div class="tab-pane" id="tab4">
										<p>1. Qi Jing, Li Cheng, Shubin Liao, Suke Li. ATPL- A
											Trust Management Policy Language Based On TEAMA. Journal of
											Theoretical and Applied Information Technology, 2012.
											EI20131016090749</p>
										<p>2. Jing Qi, Wang Hongbing, Liu Peng, Wang Zhao, Chen
											Zhong. Numen: Network Risk Evaluation based on Naïve
											Bayes-based Attack Tree. International Journal of
											Advancements in Computing Technology, 2012. EI20130515976390
										</p>
										<p>3. Qi Jing, Li Cheng. Security Analysis for Internet of
											Ships. Journal of Theoretical and Applied Information
											Technology, 2012. EI20131016090761</p>
										<p>4. Hu Weihua, Jing Qi (corresponding author), Du Yuge,
											Chen Li, Wang Zhao, Chen Zhong. Anides: Agent-based Network
											Intrusion Detection Expert System. International Review on
											Computers and Software, 2012. EI20124515640897</p>
										<p>5. Jing Qi, Hu Jianbin, Guan Zhi, Chen Zhong. TEAMA:
											Trust Evaluation Based Authorization Model for Ad Hoc
											Networks. In Proceedings of 2011 International Conference on
											Instrumentation, Measurement, Computer, Communication and
											Control (IMCCC2011). EI20121915005186</p>
										<p>6. Heng Liu, Hongbing Wang, Zhao Wang ,Zhong Chen, Qi
											Jing. FatPET: an Attack Tree-based framework of Penetration
											Tests in Distributed Environment. In Proceedings of 2011
											International Conference on Instrumentation, Measurement,
											Circuits and Systems (ICIMCS 2011): 423-426.</p>
										<p>7. Yizhan Yao, Zhao Wang, Zhong Chen,Xuesong zhang, Qi
											Jing. Icloud: Identifying Faulty Cloudlets in Cloud Services.
											In Proceedings of 2011 4th International Conference on
											Advanced Computer Theory and Engineering (ICACTE 2011):
											183-186.</p>
										<p>8. Qi Jing, Jianbin Hu, Zhong Chen. C4W: An Energy
											Efficient Public Key Cryptosystem for Large-Scale Wireless
											Sensor Networks. Nova Science Publishers Inc, 2009/5. Chapter
											9 of the book “From Problem to Solution : Wireless Sensor
											Networks Security”</p>
										<p>9. 荆琦，唐礼勇，陈钟：无线传感器网络中的信任管理，软件学报，2008(7):1716-1730
											（EI：080811108547）</p>
										<p>10. 荆琦，唐礼勇，陈洲峰，王昭：无线传感器网络应用支撑技术研究，计算机科学，2008(3):22-27</p>
										<p>11. 荆琦，陈洲峰，关志，王昭：无线传感器网络的设计与部署，计算机工程与应用，2007(27):18-21</p>
										<p>12. Yong Wu, Zhong Chen, Qi Jing, Yong-cai Wang. LENO:
											LEast Rotation Near-Optimal Cluster Head Rotation Strategy in
											Wireless Sensor Networks. In Proceedings of 2007
											International Conference on Advanced Networking and
											Applications (AINA '07): 195-201. （EI：20073910826480）</p>
										<p>13. Qi Jing, Jianbin Hu, Zhong Chen. C4W: An Energy
											Efficient Public Key Cryptosystem for Large-Scale Wireless
											Sensor Networks.In Proceedings of 2006 IEEE International
											Conference on Mobile Ad Hoc and Sensor Sysetems, (MASS’06) :
											827-832. （EI：080811108547）</p>
										<p>14. 刘鹏，张明，荆琦，陈钟：基于策略的移动设备安全应用框架，计算机工程，2005(31):149-161
										</p>
										<p>15. JingQi, Wang Huimin, Xu Xiaofei. Project
											Organization Model and Collaborative Project Management of
											Agile Virtual Enterprise. Journal of Harbin Institute of
											Technology, Aug 2004, vol 36: 995-1000 (EI: 2004458452315)</p>
									</div>
									<div class="tab-pane" id="tab5">
										<p>1. 参与多次国际会议的组织与审阅工作，是2011 International Conference on
											Green Communications and Networks (GCN 2011) 程序委员会联合主席</p>
										<p>2. 东北亚开源软件推进论坛第二工作组中方核心成员</p>
										<p>3. 开源及基础软件通用技术创新战略联盟北大方具体负责人</p>
										<p>4. 国家重点出版工程多媒体《中华医学百科全书》网络版专家委员会特聘专家</p>
										<p>5. 面向全国高校教师的“物联网工程专业课程研讨班”主讲教师</p>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				


			</div>


			<div class="span3">
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-comments"></i>友情链接
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newLink">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						
					</div>
				</div>
				<div class="portlet box yellow">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-cogs"></i>热门下载
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newDown">
						<p>
							<a href="#">Linux内存管理心得</a>
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</body>
</html>
<?php }} ?>
