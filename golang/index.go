package main
import "fmt"
import "time"

func BubbleSort(array[] int)[]int {
   for i:=0; i< len(array)-1; i++ {
      for j:=0; j < len(array)-i-1; j++ {
         if (array[j] > array[j+1]) {
            array[j], array[j+1] = array[j+1], array[j]
         }
      }
   }
   return array
}
func main() {
   array:= []int{11, 14, 3, 8, 18, 17, 43};
   start := time.Now()
   BubbleSort(array);
    elapsed := time.Since(start)
    fmt.Printf("Execution time %s", elapsed)
}