<script>
	export default{
		render: function (createElement) {
			return createElement(
				"table", {
					ref: 'table'
				}, []
			)
		},
		props: ['users'],
		data() {
			return {
				headers: [
					{title: 'id'},
					{title: 'phone'},
				],
				rows: [],
				dtHandle: null
			}
		},
		watch: {
			users(val, oldVal) {
				let vm = this;
				vm.rows = [];
				val.forEach(function (item) {
					let row = [];
					row.push(item.id);
					row.push(item.phone);
					vm.rows.push(row);
				});
				vm.dtHandle.clear();
				vm.dtHandle.rows.add(vm.rows);
				vm.dtHandle.draw();
			}
		},
		mounted() {
			let vm = this;
			vm.dtHandle = $(this.$el).DataTable({
				columns: vm.headers,
				data: vm.rows,
				searching: true,
				paging: true,
				info: false
			});
		}
	}
</script>