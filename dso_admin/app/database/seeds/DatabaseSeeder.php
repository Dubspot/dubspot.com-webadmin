<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('RoomsTableSeeder');
		$this->call('Authorize_responsesTableSeeder');
		$this->call('Basket_itemsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('Course_instance_datesTableSeeder');
		$this->call('Course_instancesTableSeeder');
		$this->call('CoursesTableSeeder');
		$this->call('I_taxesTableSeeder');
		$this->call('InvoicesTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('Order_itemsTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('PaymentsTableSeeder');
		$this->call('Product_typesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('Program_instancesTableSeeder');
		$this->call('ProgramsTableSeeder');
		$this->call('PromotionsTableSeeder');
		$this->call('Promotions_issuedTableSeeder');
		$this->call('S_taxesTableSeeder');
		$this->call('Scheduled_paymentsTableSeeder');
		$this->call('Uber_programsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('AddressesTableSeeder');
		$this->call('TransactionsTableSeeder');
	}

}