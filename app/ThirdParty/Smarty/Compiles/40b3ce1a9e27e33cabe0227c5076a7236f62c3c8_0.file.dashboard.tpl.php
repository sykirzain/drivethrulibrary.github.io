<?php
/* Smarty version 4.1.0, created on 2022-07-10 06:02:26
  from 'C:\xampp\htdocs\library\app\Views\Librarian\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62cab1c2432988_65062604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40b3ce1a9e27e33cabe0227c5076a7236f62c3c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\library\\app\\Views\\Librarian\\dashboard.tpl',
      1 => 1657450942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/topbar.tpl' => 1,
    'file:Elements/footer.tpl' => 1,
  ),
),false)) {
function content_62cab1c2432988_65062604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214543365062cab1c2422f87_84626420', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_214543365062cab1c2422f87_84626420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_214543365062cab1c2422f87_84626420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="main-content">
	
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/topbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		
			<?php echo '<script'; ?>
 type="text/javascript">
			jQuery(document).ready(function($)
			{
				
				// Sample Toastr Notification
				setTimeout(function()
				{
					var opts = {
						"closeButton": true,
						"debug": false,
						"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
						"toastClass": "black",
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					};
			
					toastr.success("Welcome back <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
!", "Greetings", opts);
				}, 3000);
				
			
			
				// Sparkline Charts
				$('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'} );
				$('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'} );
				$('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'} );
				$('.bar').sparkline([ [1,4], [2, 3], [3, 2], [4, 1] ], { type: 'bar' });
				$('.pie').sparkline('html', {type: 'pie',borderWidth: 0, sliceColors: ['#3d4554', '#ee4749','#00b19d']});
				$('.linechart').sparkline();
				$('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'} );
				$('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'} );
			
			
				$(".monthly-sales").sparkline([1,2,3,5,6,7,2,3,3,4,3,5,7,2,4,3,5,4,5,6,3,2], {
					type: 'bar',
					barColor: '#485671',
					height: '80px',
					barWidth: 10,
					barSpacing: 2
				});
			
			
				// JVector Maps
				var map = $("#map");
			
				map.vectorMap({
					map: 'europe_merc_en',
					zoomMin: '3',
					backgroundColor: '#383f47',
					focusOn: { x: 0.5, y: 0.8, scale: 3 }
				});
			
			
			
				// Line Charts
				var line_chart_demo = $("#line-chart-demo");
			
				var line_chart = Morris.Line({
					element: 'line-chart-demo',
					data: [
						{ y: '2006', a: 100, b: 90 },
						{ y: '2007', a: 75,  b: 65 },
						{ y: '2008', a: 50,  b: 40 },
						{ y: '2009', a: 75,  b: 65 },
						{ y: '2010', a: 50,  b: 40 },
						{ y: '2011', a: 75,  b: 65 },
						{ y: '2012', a: 100, b: 90 }
					],
					xkey: 'y',
					ykeys: ['a', 'b'],
					labels: ['October 2013', 'November 2013'],
					redraw: true
				});
			
				line_chart_demo.parent().attr('style', '');
			
			
				// Donut Chart
				var donut_chart_demo = $("#donut-chart-demo");
			
				donut_chart_demo.parent().show();
			
				var donut_chart = Morris.Donut({
					element: 'donut-chart-demo',
					data: [
						{label: "Download Sales", value: getRandomInt(10,50)},
						{label: "In-Store Sales", value: getRandomInt(10,50)},
						{label: "Mail-Order Sales", value: getRandomInt(10,50)}
					],
					colors: ['#707f9b', '#455064', '#242d3c']
				});
			
				donut_chart_demo.parent().attr('style', '');
			
			
				// Area Chart
				var area_chart_demo = $("#area-chart-demo");
			
				area_chart_demo.parent().show();
			
				var area_chart = Morris.Area({
					element: 'area-chart-demo',
					data: [
						{ y: '2006', a: 100, b: 90 },
						{ y: '2007', a: 75,  b: 65 },
						{ y: '2008', a: 50,  b: 40 },
						{ y: '2009', a: 75,  b: 65 },
						{ y: '2010', a: 50,  b: 40 },
						{ y: '2011', a: 75,  b: 65 },
						{ y: '2012', a: 100, b: 90 }
					],
					xkey: 'y',
					ykeys: ['a', 'b'],
					labels: ['Series A', 'Series B'],
					lineColors: ['#303641', '#576277']
				});
			
				area_chart_demo.parent().attr('style', '');
			
			
			
			
				// Rickshaw
				var seriesData = [ [], [] ];
			
				var random = new Rickshaw.Fixtures.RandomData(50);
			
				for (var i = 0; i < 50; i++)
				{
					random.addData(seriesData);
				}
			
				var graph = new Rickshaw.Graph( {
					element: document.getElementById("rickshaw-chart-demo"),
					height: 193,
					renderer: 'area',
					stroke: false,
					preserve: true,
					series: [{
							color: '#73c8ff',
							data: seriesData[0],
							name: 'Upload'
						}, {
							color: '#e0f2ff',
							data: seriesData[1],
							name: 'Download'
						}
					]
				} );
			
				graph.render();
			
				var hoverDetail = new Rickshaw.Graph.HoverDetail( {
					graph: graph,
					xFormatter: function(x) {
						return new Date(x * 1000).toString();
					}
				} );
			
				var legend = new Rickshaw.Graph.Legend( {
					graph: graph,
					element: document.getElementById('rickshaw-legend')
				} );
			
				var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
					graph: graph,
					legend: legend
				} );
			
				setInterval( function() {
					random.removeData(seriesData);
					random.addData(seriesData);
					graph.update();
			
				}, 500 );
			});
			
			
			function getRandomInt(min, max)
			{
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
			<?php echo '</script'; ?>
>
		
	
		<div class="row">
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $_smarty_tpl->tpl_vars['totalOfNewReservations']->value;?>
" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>New Reservations</h3>
					<p>Total of new reservations.</p>
				</div>
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $_smarty_tpl->tpl_vars['availableBooks']->value;?>
" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h3>Available Books</h3>
					<p>Total of all available books.</p>
				</div>
		
			</div>
			
			<div class="clear visible-xs"></div>
		
			<div class="col-sm-3 col-xs-6">
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-rss"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $_smarty_tpl->tpl_vars['totalOfStudents']->value;?>
" data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h3>Students</h3>
					<p>Total of registered students.</p>
				</div>
				
		
			</div>
		
			<div class="col-sm-3 col-xs-6">
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php echo $_smarty_tpl->tpl_vars['totalOfReservations']->value;?>
" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h3>Reservations</h3>
					<p>Total of whole reservations.</p>
				</div>
			</div>
		</div>
		
		<br />
		
		
		
		<!-- Footer -->
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
<?php
}
}
/* {/block 'body'} */
}
