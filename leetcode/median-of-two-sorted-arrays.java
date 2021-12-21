/*https://leetcode.com/problems/median-of-two-sorted-arrays/
*/


class Solution {
    public double findMedianSortedArrays(int[] nums1, int[] nums2) {
        
        int arrayLengthnums1 = nums1.length;  
        int arrayLengthnums2 = nums2.length;
        int median_index = 0;
        if(arrayLengthnums1 == 0){
            if(arrayLengthnums2%2 == 0){
                median_index = arrayLengthnums2/2;
                return (nums2[median_index] + nums2[median_index+1])/2;
            }
            else{
                return nums2[arrayLengthnums2/2];
            }
        }
        else if(arrayLengthnums2 == 0){
            if(arrayLengthnums1%2 == 0){
                median_index = arrayLengthnums1/2;
                return (nums1[median_index] + nums1[median_index+1])/2;
            }
            else{
                return nums1[arrayLengthnums1/2];
            }
        }
        
    }
}