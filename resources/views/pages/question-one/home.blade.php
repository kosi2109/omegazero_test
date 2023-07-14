<x-layouts.app title="Home">
    <x-partials.introduce number='1' />

    <div class="d-flex justify-content-center">
        <a href="{{route('question-one.auth.index')}}" class="btn btn-primary">You Can Start From Here</a>
    </div>

    <div class="text-start mt-5">
        <h4>Make:</h4>
        <ul>
            <li>Please Make Migration and Run seeder to get data.</li>
        </ul>
    </div>
    <div>
    <div class="text-start">
        <h4>Login as:</h4>
        <ul>
            <li>email : superadmin@gmail.com</li>
            <li>password : adminadmin</li>
        </ul>
    </div>
    <div>
        <h4>Description:</h4>
        <ul>
            <li>Basic Auth : User Can Login and Logout.</li>
            <li>CRUD : after login with above account and can make CRUD.</li>
            <li>Filter : You can filer by name, department and role and can also choose paginate size.</li>
            <li>CSV : You can export CSV by above filter result.</li>
            <li>Validation & Pagination : You can found validation in Login form, user create and update form.Pagination is mentioned in above.</li>
            <li>Eloquent and Relation : I use eloquent relation in user model under scope method(user to role relation). And I also use mutator and scope filer in model.</li>
            <li>Assign Admin can do CRUD : I created two roles, Admin and Employee(You can find in DatabaseSeeder.php).Also Create 4 permissions for user CRUD(You can find in DatabaseSeeder.php). I assigned these 4 permission to Admin role. User can CRUD by assigning Admin role. <span class="text-danger">I don't make CRUD for these roles and permission because it is just CURD operation.</span></li>
            <li class="text-warning">Bonous : I make reusable table component to make CRUD operation on permissions.</li>
        </ul>
    </div>
</x-layouts.app>