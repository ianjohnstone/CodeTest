
<?php
/* @var $this ResultsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Results',
);

$this->menu=array(
	array('label'=>'Create Results', 'url'=>array('create')),
	array('label'=>'Manage Results', 'url'=>array('admin')),
);
?>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<h1>Results</h1>
<div>
	Select Country: <select id="selectCountry">
						<?php
							$countries = Countries::model()->findAll();
							foreach($countries as $country) {
								echo "<option value=$country->CountryID>$country->Name</option>";
							}
						?>
					</select>
	<br />
	Select Event and Year: <select id="selectYear">
						<?php
							$events = Events::model()->findAll();
							foreach($events as $event) {
								echo "<option value=$event->EventID>$event->Name $event->Year</option>";
							}
						?>
					</select>
</div>

<div id="medalsChart">
</div>

<script>
$(function () {
	
    $('#medalsChart').highcharts({
        title: {
            text: 'Medals Won by Event',
            x: -20 //center
        },
        xAxis: {
            categories: ['Gold', 'Silver', 'Bronze']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Medals Earned'
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{ <?php 
		
		for each
		
		?>
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
});
</script>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
