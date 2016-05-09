<div class="form-group">
				{!!Form::label('name','Nombre: ')!!}
				{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
			</div>
			<div class="form-group">
				{!!Form::label('image','Imagen del profesor: ')!!}
				{!! Form::file('image') !!}
			</div>

			<div class="form-group">
				{!! Form::label('technique','Tecnica: ') !!}
				{!! Form::select('technique', array(
											'Informatica' => 'Informatica',
											'Hoteleria' => 'Hoteleria',
											'Mercotecnia' => 'Mercotecnia',
											'Contabilidad' => 'Contabilidad',
											'Electricidad' => 'Electricidad',
											'Electronica' => 'Electronica',
											'Refrigeracion' => 'Refrigeracion'), 
					null, ['placeholder' => 'Seleccione la tecnica','class'=>'form-control']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('course','Curso: ') !!}
				{!! Form::select('course', array(
											'3ro' => '3ro',
											'4to' => '4to'), 
					null, ['placeholder' => 'Seleccione el Curso','class'=>'form-control']) !!}
			</div>
			<div class="form-group">
				{!!Form::label('celPhone','Telefono: ')!!}
				{!!Form::text('celPhone',null,['class'=>'form-control','onkeyup'=>'mascara(this,"-",patron,true)','placeholder'=>'Telefono'])!!}
			</div>
			{!! Html::script('js/validar_telefono.js') !!}