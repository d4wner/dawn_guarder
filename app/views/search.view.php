<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
 <script src="./app/js/esl.js"></script>
</head>
<body>
    <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
<?php
$log_date_arr = array();
$log_date_count = array();
$attack_type_arr = array();
#$attack_type_count = array();
 
if ($log_date_query->num_rows() > 0)
   {

foreach ($log_date_query->result_array() as $row)
 {

   $log_date_arr[]=$row['log_date'];
   $log_date_count[]=$row['count(1)'];
  }

    }




if ($attack_type_query->num_rows() > 0)
   {

foreach ($attack_type_query->result_array() as $row)
   {

   $attack_type_arr[$row['attack_type']]= $row['count(1)'];
  

   }

  } 

?>
    <div id="bar" style="height:400px"></div>
    </br> 
    </br>
    <div id="pie" style="height:400px"></div>
	
    <script type="text/javascript">
        // 路径配置
        require.config({
            paths:{ 
                'echarts' : './app/js/echarts',
                'echarts/chart/bar' : './app/js/echarts'
            }
        });

// 使用
        require(
            [
                'echarts',
                'echarts/chart/bar' // 使用柱状图就加载bar模块，按需加载
            ],
            function(ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('bar')); 
                
                var option = {
                    tooltip: {
                        show: true
                    },
                    legend: {
                        data:['源IP攻击次数']
                    },
                    xAxis : [
                        {
                            type : 'category',
 			    data : <?php echo json_encode($log_date_arr);?>
                            //data : ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
                        }
                    ],
                    yAxis : [
                        {
                            type : 'value'
                        }
                    ],
                    series : [
                        {
                            "name":"源IP攻击次数",
                            "type":"bar",
			    "data":<?php echo json_encode($log_date_count);?>
                            //"data":[5, 20, 40, 10, 10, 20]
                        }
                    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>

 <script type="text/javascript">
        // 路径配置
        require.config({
            paths:{ 
                'echarts' : './echarts',
                'echarts/chart/pie' : './echarts'
            }
        });

// 使用
        require(
            [
                'echarts',
                'echarts/chart/pie' // 使用柱状图就加载bar模块，按需加载
            ],
            function(ec) {
                // 基于准备好的dom，初始化echarts图表
                var myChart = ec.init(document.getElementById('pie')); 
                
                var option = {
                    title : {
        text: '源IP攻击类型比例图',
        subtext: '攻击分析',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'vertical',
        x : 'left',
        //data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎']
	data:
	<?php
		
	echo "[";
		foreach  ($attack_type_arr as $key => $value)
		{
		   echo "'".$key."',";
		}
	echo ']';
	?>
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    calculable : true,
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', 225],
            data:[

		<?php 
		foreach  ($attack_type_arr as $key => $value)
		{
		   echo "{value:".$value.", name:'".$key."'},";
		}

		?>
                //{value:335, name:'直接访问'},
                //{value:310, name:'邮件营销'},
                //{value:234, name:'联盟广告'},
                //{value:135, name:'视频广告'},
                //{value:1548, name:'搜索引擎'}
            ]
        }
    ]
                };
        
                // 为echarts对象加载数据 
                myChart.setOption(option); 
            }
        );
    </script>
</body>
