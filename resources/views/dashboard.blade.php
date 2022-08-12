<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard: Human Resource Management System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
            
                <div class="p-6 bg-white border-b border-gray-200">
                                        <!--
                        add announcement
                    --> 
                    <a class='link' href="{{ url('/dashboard') }}" class="p-6 bg-white border-b border-gray-200">Announcement</a>
                                        <!--
                        View Employee
                    --> 
                    <a class='link' href="{{ url('/dashboard') }}" class="p-6 bg-white border-b border-gray-200">View Employee</a>
                                        <!--
                        Add Employee
                    --> 
                    <a class='link' href="{{ url('/addEmployee') }}" class="p-6 bg-white border-b border-gray-200">Add Employee</a>
                                    <!--
                        Update Employee
                    --> 
                    <a class='link' class='link' href="{{ url('/dashboard') }}" class="p-6 bg-white border-b border-gray-200">Update Employee</a>
                                    <!--
                        Job Applicants
                    --> 
                    <a class='link' href="{{ url('/dashboard') }}" class="p-6 bg-white border-b border-gray-200">Job Applicants</a>
                                    <!--
                        Add job Circular
                    --> 
                    <a class='link' href="{{ url('/dashboard') }}" class="p-6 bg-white border-b border-gray-200">Add job Circular</a>
                                    <!--
                        Payroll Manage
                    --> 
                    <a class='link' href="{{ url('/dashboard') }}" class="p-6 bg-white border-b border-gray-200">Payroll Manage</a>

                    <style>
                        .link{
                            margin: 5px;
                            padding: 20px;
                            border-radius: 8px;
                            background: skyblue;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
