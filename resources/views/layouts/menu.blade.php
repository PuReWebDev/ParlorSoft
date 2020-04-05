<li class="{{ Request::is('shops*') ? 'active' : '' }}">
    <a href="{{ route('shops.index') }}"><i class="fa fa-edit"></i><span>Shops</span></a>
</li>

<li class="{{ Request::is('services*') ? 'active' : '' }}">
    <a href="{{ route('services.index') }}"><i class="fa fa-edit"></i><span>Services</span></a>
</li>

<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{{ route('employees.index') }}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('workingHours*') ? 'active' : '' }}">
    <a href="{{ route('workingHours.index') }}"><i class="fa fa-edit"></i><span>Working Hours</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('appointments*') ? 'active' : '' }}">
    <a href="{{ route('appointments.index') }}"><i class="fa fa-edit"></i><span>Appointments</span></a>
</li>

