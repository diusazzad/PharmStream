<template>
  <div class="counter-container">
    <p class="count-display">{{ count }}</p>
    <button class="increment-button" @click="increment">Increment</button>
  </div>
</template>

<script setup>
import { ref } from "vue";

const count = ref(0);
const increment = () => {
  count.value++;
};
</script>

<style scoped>
.counter-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  padding: 20px;
  background-color: #f0f0f0;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.count-display {
  font-size: 24px;
  font-weight: bold;
  color: #333;
}

.increment-button {
  padding: 10px 15px;
  font-size: 16px;
  cursor: pointer;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.increment-button:hover {
  background-color: #0056b3;
}
</style>
