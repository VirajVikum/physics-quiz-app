<div class="bg-white w-full max-w-md rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-semibold text-gray-800 text-center mb-4">Quiz Results</h2>

    <!-- Result Display with Animation -->
    <div class="text-center text-4xl font-bold text-blue-900 py-4 animate-pulse">
        {{ $result }} %
    </div>

    <!-- Star Rating Based on Result -->
    <div class="text-center text-yellow-500 text-2xl mb-6 animate-pulse">
        @if ($result == 100)
            <i class="fas fa-star animate-star" style="animation-delay: 0s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.3s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.6s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.9s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 1.2s;"></i>
        @elseif ($result >= 75)
            <i class="fas fa-star animate-star" style="animation-delay: 0s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.3s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.6s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.9s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 1.2s;"></i>
        @elseif ($result >= 65)
            <i class="fas fa-star animate-star" style="animation-delay: 0s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.3s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.6s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 0.9s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 1.2s;"></i>
        @elseif ($result >= 45)
            <i class="fas fa-star animate-star" style="animation-delay: 0s;"></i>
            <i class="fas fa-star animate-star" style="animation-delay: 0.3s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 0.6s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 0.9s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 1.2s;"></i>
        @elseif ($result >= 5)
            <i class="fas fa-star animate-star" style="animation-delay: 0s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 0.3s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 0.6s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 0.9s;"></i>
            <i class="far fa-star animate-star" style="animation-delay: 1.2s;"></i>
        @else
            <p class="text-gray-500">No stars awarded</p>
        @endif
    </div>
    
    <style>
        .animate-star {
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }
    
        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
    

    <p class="text-center text-gray-600 mb-8">Thank you for completing the quiz. Here is your result based on your
        responses.</p>

    <button onclick="Livewire.dispatch('closeModal')"
        class="w-full bg-blue-900 hover:bg-darkBlue text-white font-semibold py-3 rounded-lg transition duration-200">
        Close
    </button>
</div>
