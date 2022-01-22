<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="py-4">
				<form method="post" action="{{route('student.program_report.search',['circle'=>$circle->id,'student'=>$student->id])}}">
					@csrf
					<div class="flex justify-around">
						<div>
							من
							<input type="date" name="date_from" class="form-control">
						</div>
						<div>
							إلى
							<input type="date" name="date_to" class="form-control">
						</div>
					</div>
					<div>
						<button class="btn btn-outline-secondary btn-block mt-2">بحث</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
