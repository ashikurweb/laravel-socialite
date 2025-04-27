<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br  px-4">
        <div class="bg-gray-800 shadow-2xl rounded-2xl p-10 w-full max-w-md transition-all duration-500">
            <h2 class="text-3xl font-bold text-center text-white mb-6">Welcome Back</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <input type="email" name="email" :value="old('email')" placeholder="Email"
                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-900 text-white placeholder-gray-400 hover:border-blue-500 transition-all  duration-300" />

                <input type="password" name="password" placeholder="Password"
                    class="w-full px-4 py-3 rounded-lg border border-gray-600 bg-gray-900 text-white placeholder-gray-400 hover:border-blue-500 transition-all duration-300" />

                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2 text-gray-400 text-sm">
                        <input type="checkbox" name="remember" class="accent-blue-500" />
                        <span>Remember me</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-blue-400 hover:underline">Forgot password?</a>
                    @endif
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition duration-300">
                    Login
                </button>
            </form>

            <div class="mt-6 text-center text-gray-400">Or login with</div>

            <div class="flex items-center justify-center gap-5 mt-5">
                <!-- Facebook -->
                <a href="{{ route('social.login', 'facebook') }}" class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-slate-600 shadow-lg flex items-center justify-center transition duration-300 hover:scale-110 hover:bg-blue-600/20 hover:shadow-blue-500/50">
                    <i class="fab fa-facebook-f text-blue-500 text-xl"></i>
                </a>

                <!-- Google -->
                <a href="{{ route('social.login', 'google') }}" class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-slate-600 shadow-lg flex items-center justify-center transition duration-300 hover:scale-110 hover:bg-red-500/20 hover:shadow-red-500/50">
                    <i class="fab fa-google text-red-500 text-xl"></i>
                </a>

                <!-- LinkedIn -->
                <a href="{{ route('social.login', 'linkedin') }}" class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-slate-600 shadow-lg flex items-center justify-center transition duration-300 hover:scale-110 hover:bg-blue-800/20 hover:shadow-blue-800/50">
                    <i class="fab fa-linkedin text-blue-800 text-xl"></i>
                </a>

                <!-- GitHub -->
                <a href="{{ route('social.login', 'github') }}" class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-slate-600 shadow-lg flex items-center justify-center transition duration-300 hover:scale-110 hover:bg-black/20 hover:shadow-black/50">
                    <i class="fab fa-github text-gray-200 text-xl"></i>
                </a>
            </div>

            <p class="mt-6 text-center text-sm text-gray-400">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-400 hover:underline">Sign up</a>
            </p>
        </div>
    </div>
</x-guest-layout>
