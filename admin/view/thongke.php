        <div class="thongke">
            <div style=" width:50%;  float: left;"  id="chart_div">Thống kê</div>
            <!-- <div style=" width:50%;  float: right"   id="chart_div1">dsfd</div>     -->
        </div>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load('visualization', '1.0', {
            'packages': ['corechart']
        });
        google.setOnLoadCallback(drawVisualization);

        function drawVisualization() 
        {
            //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
            //tao ra datatable
            var data = new google.visualization.DataTable();
            //trong bang phai co dong va cot
            var rows = new Array();
            var tenhh = new Array();
            var soluongban = new Array();
            var datatenhh = 0;
            var soluonghh = 0;
            <?php
                $hh = new HangHoa();
                $result = $hh->getListThongKe_SL_mathang();
                while($set = $result->fetch()){
                $tenhh = $set['tenhh'];
                $slb = $set['soluongban'];
                echo "tenhh.push('" . $tenhh . "');";
                echo "soluongban.push('" . $slb . "');";
                }
            ?>
            //tao dong
            for(i = 0; i < tenhh.length; i++)
            {
                datatenhh = tenhh[i];
                soluonghh = parseInt(soluongban[i]);
                rows.push([datatenhh, soluonghh]);
            } 
            //tao cot
            data.addColumn('string', 'Hang Hoa')
            data.addColumn('number', 'So Luong Ban')
            //add dong vao data ma data chinh la data table
            data.addRows(rows)
            // tao kieu cua bang
            var option = {
                title: 'Thong ke so luong ban cua hang hoa',
                'width': 600,
                'height': 600,
                'backgroundColor': '#ffffff',
                is3D: true 
            };
            //tien hanh ve
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, option);
	    }               
    </script>

        
 
 