		<!-- Backdrop -->
		<div
		    x-transition:enter="transition duration-300 ease-in-out"
		    x-transition:enter-start="opacity-0"
		    x-transition:enter-end="opacity-100"
		    x-transition:leave="transition duration-300 ease-in-out"
		    x-transition:leave-start="opacity-100"
		    x-transition:leave-end="opacity-0"
		    x-show="isNotificationsPanelOpen"
		    @click="isNotificationsPanelOpen = false"
		    class="fixed inset-0 z-10 bg-primary-darker"
		    style="opacity: 0.5"
		    aria-hidden="true"></div>
		<!-- Panel -->
		<section
		    x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
		    x-transition:enter-start="-translate-x-full"
		    x-transition:enter-end="translate-x-0"
		    x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
		    x-transition:leave-start="translate-x-0"
		    x-transition:leave-end="-translate-x-full"
		    x-ref="notificationsPanel"
		    x-show="isNotificationsPanelOpen"
		    @keydown.escape="isNotificationsPanelOpen = false"
		    tabindex="-1"
		    aria-labelledby="notificationPanelLabel"
		    class="fixed inset-y-0 z-20 w-full max-w-xs bg-white dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
		    <div class="absolute right-0 p-2 transform translate-x-full">
		        <!-- Close button -->
		        <button
		            @click="isNotificationsPanelOpen = false"
		            class="p-2 text-white rounded-md focus:outline-none focus:ring">
		            <svg
		                class="w-5 h-5"
		                xmlns="http://www.w3.org/2000/svg"
		                fill="none"
		                viewBox="0 0 24 24"
		                stroke="currentColor">
		                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
		            </svg>
		        </button>
		    </div>
		    <div class="flex flex-col h-screen" x-data="{ activeTabe: 'action' }">
		        <!-- Panel header -->
		        <div class="flex-shrink-0">
		            <div class="flex items-center justify-between px-4 pt-4 border-b dark:border-primary-darker">
		                <h2 id="notificationPanelLabel" class="pb-4 font-semibold">Notifications</h2>
		                <div class="space-x-2">
		                    <button
		                        @click.prevent="activeTabe = 'action'"
		                        class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
		                        :class="{'border-primary-dark dark:border-primary': activeTabe == 'action', 'border-transparent': activeTabe != 'action'}">
		                        Action
		                    </button>
		                    <button
		                        @click.prevent="activeTabe = 'user'"
		                        class="px-px pb-4 transition-all duration-200 transform translate-y-px border-b focus:outline-none"
		                        :class="{'border-primary-dark dark:border-primary': activeTabe == 'user', 'border-transparent': activeTabe != 'user'}">
		                        User
		                    </button>
		                </div>
		            </div>
		        </div>

		        <!-- Panel content (tabs) -->
		        <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
		            <!-- Action tab -->
		            <div class="space-y-4" x-show.transition.in="activeTabe == 'action'">
		                <p class="px-4">Action tab content</p>
		                <!--  -->
		                <!-- Action tab content -->
		                <!--  -->
		            </div>

		            <!-- User tab -->
		            <div class="space-y-4" x-show.transition.in="activeTabe == 'user'">
		                <p class="px-4">User tab content</p>
		                <!--  -->
		                <!-- User tab content -->
		                <!--  -->
		            </div>
		        </div>
		    </div>
		</section>