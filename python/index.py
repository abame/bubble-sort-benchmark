import numpy as np
import time

def bubbleSort(arr):
	n = len(arr)
	swapped = False

	for i in range(n-1):
		for j in range(0, n-i-1):

			if arr[j] > arr[j + 1]:
				swapped = True
				arr[j], arr[j + 1] = arr[j + 1], arr[j]

		if not swapped:
			return

arr = np.random.randint(0,10000,10000)

st = time.time()
bubbleSort(arr)
et = time.time()

elapsed_time = et - st
print('Execution time:', elapsed_time, 'seconds')