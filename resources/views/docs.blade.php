<x-front-layout>

    <main class="max-w-7xl mx-auto my-2 lg:p-8 grid grid-cols-5 gap-5 flex-col scroll-mt-28 scroll-smooth">
        <aside class="col-span-1 bg-white rounded-lg">
            <div class="sticky top-0">
                <ul class="flex flex-col divide-y">
                    <li>
                        <a class="flex p-3 items-center hover:bg-slate-200 " href="#projectOverview">Project Overview</a>
                    </li>
                    <li>
                        <a class="flex p-3 items-center hover:bg-slate-200 " href="#installation">Installation
                            Instructions</a>
                    </li>

                    <li>
                        <a class="flex p-3 items-center hover:bg-slate-200 " href="#keyFeatures">Key Features</a>
                    </li>
                    <li>
                        <a class="flex p-3 items-center hover:bg-slate-200 " href="#usage">Usage Instructions</a>
                    </li>
                    <li>
                        <a class="flex p-3 items-center hover:bg-slate-200 " href="#technology">Technology Stack</a>
                    </li>
                    <li>
                        <a class="flex p-3 items-center hover:bg-slate-200 " href="#technology">API Documentation</a>
                    </li>

                </ul>
            </div>
        </aside>
        <article class="col-span-4 flex flex-col gap-6">
            <h2 class="text-2xl">Shorten Now: Documentation and Installation Guide</h2>
            <div class="bg-white p-4 rounded-lg flex flex-col gap-3">
                <h3 id="projectOverview">Project Overview</h3>
                <p>Shorten Now is a user-friendly URL-shortening platform that allows guests to shorten URLs without
                    authentication. It includes an admin panel for managing the URLs, offering functionalities like
                    searching,
                    deleting, and listing URLs. The system is built using modern web technologies to ensure performance
                    and
                    maintainability.</p>
            </div>
            <div class="bg-white p-4 rounded-lg flex flex-col gap-3">
                <h3 id="installation">Installation Instructions</h3>
                <ul class="list-decimal px-4">
                    <li class="font-semibold">Prerequisites</li>
                    <p>Ensure the following are installed on your system:</p>
                    <ul class="list-disc px-5">
                        <li>PHP 8.1 or later</li>
                        <li>Composer</li>
                        <li>MySQL</li>
                        <li>Node.js and npm</li>
                        <li>A web server (Apache/Nginx)</li>
                    </ul>
                    <li class="font-semibold">Clone the Repository</li>
                    <ul class="list-disc px-5">
                        <li>git clone</li>
                        <li>cd shorten-now</li>
                    </ul>
                    <li class="font-semibold">Install Dependencies</li>
                    <ul class="list-disc px-5">
                        <li>Install PHP Dependencies</li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <pre>composer install</pre>
                        </div>
                        <li>Install JavaScript Dependencies</li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <pre>npm install</pre>
                        </div>
                    </ul>
                    <li class="font-semibold">Environment Setup</li>
                    <ul class="list-disc px-5">
                        <li>Create a .env file by copying the example:</li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <pre>cp .env.example .env</pre>
                        </div>
                        <li>Configure your database in the .env file:
                        </li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <div class="text-left">
                                <pre>DB_CONNECTION=mysql</pre>
                                <pre>DB_HOST=127.0.0.1</pre>
                                <pre>DB_PORT=3306</pre>
                                <pre>DB_DATABASE=shorten_now</pre>
                                <pre>DB_USERNAME=your_username</pre>
                                <pre>DB_PASSWORD=your_password</pre>
                            </div>
                        </div>
                        <li>Generate the application key:</li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <pre class="text-left">php artisan key:generate</pre>
                        </div>
                        <li>Database Setup</li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <pre class="text-left">CREATE DATABASE shorten_now;</pre>
                        </div>
                        <li>Run migrations to set up the database schema:</li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <pre class="text-left">php artisan migrate</pre>
                        </div>
                        <li>Run seeder to seed admin:</li>
                        <div class="bg-slate-200 p-3 italic my-2">
                            <pre class="text-left">php artisan db:seed</pre>
                        </div>
                    </ul>
                    <li class="font-semibold">Serve the Application</li>
                    <p>Start the development server:</p>
                    <div class="bg-slate-200 p-3 italic my-2">
                        <pre class="text-left">php artisan serve</pre>
                    </div>
                    <div class="bg-slate-200 p-3 italic my-2">
                        <pre class="text-left">npm run dev</pre>
                    </div>
                    <p>The application will be accessible at <a href="{{ route('index') }}"
                            class="underline">http://localhost:8000</a></p>


                </ul>
            </div>
            <div class="bg-white p-4 rounded-lg flex flex-col gap-3">
                <h3 id="keyFeatures">Key Features</h3>
                <ul class="list-decimal px-4">
                    <li><span class="underline">For guests</span>
                        <ul class="list-disc px-3">
                            <li><strong>Ease of Use:</strong> No sign-up or login required.</li>
                            <li><strong>Optional Expiration:</strong> Choose to set a validity period for the short URL.
                            </li>
                            <li><strong>Instant Access:</strong> Shortened URL is generated immediately.</li>
                        </ul>
                    </li>
                    <li><span class="underline">For Admins</span>
                        <ul class="list-disc px-3">
                            <li><strong>Secure Login:</strong> Protects access to the admin panel.</li>
                            <li><strong>Search and Filter:</strong> Locate URLs quickly using the search functionality.
                            </li>
                            <li><strong>Pagination:</strong> Manage large datasets efficiently.</li>
                            <li><strong>Soft Delete:</strong> Ensure deleted URLs are inaccessible while retaining their
                                history.</li>
                        </ul>
                </ul>
            </div>
            <div class="bg-white p-4 rounded-lg flex flex-col gap-3">
                <h3 id="usage">Usage Instructions</h3>
                <ul class="list-decimal px-4">
                    <li><span class="underline">For guests</span>
                        <ul class="list-disc px-3">
                            <li>Open the homepage.</li>
                            <li>Enter the long URL into the input field.</li>
                            <li>Click the "Shorten Now" button.</li>
                            <li>The system generates a short URL that can be shared or used.</li>
                        </ul>
                    </li>
                    <li><span class="underline">For Admins</span>
                        <ul class="list-disc px-3">
                            <li>Log in to the admin panel using the provided credentials.</li>
                            <li>Features available in the admin panel:</li>
                            <ul class="list-disc px-3">
                                <li>View All URLs: Paginated list of all shortened URLs.</li>
                                <li>Delete URLs: Remove unwanted URLs. Deleted URLs return HTTP 410.</li>
                                <li>Search by Long URL: Locate URLs based on the original link.</li>
                            </ul>
                        </ul>
                </ul>
            </div>
            <div class="bg-white p-4 rounded-lg flex flex-col gap-3">
                <h3 id="technology">Technology Stack</h3>
                <ul>
                    <li><strong>PHP:</strong> 8.1</li>
                    <li><strong>Framework:</strong> Laravel 10.4.8</li>
                    <li><strong>Database:</strong> MySQL</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded-lg flex flex-col gap-3">
                <h3 id="technology">API Documentation</h3>
                <p>For detailed information on how to use all API endpoints, please refer to the <a
                        class="underline text-orange-400"
                        href="https://documenter.getpostman.com/view/21435341/2sAYBYfARY" target="__blank">link</a>.
                    This will guide you through the usage, parameters, and responses for all available endpoints.</p>

            </div>
            {{-- </ul> --}}

        </article>
    </main>
</x-front-layout>
