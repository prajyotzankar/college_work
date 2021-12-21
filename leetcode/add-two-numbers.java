/**
 * Definition for singly-linked list.
 * public class ListNode {
 *     int val;
 *     ListNode next;
 *     ListNode() {}
 *     ListNode(int val) { this.val = val; }
 *     ListNode(int val, ListNode next) { this.val = val; this.next = next; }
 * }
 * https://leetcode.com/problems/add-two-numbers/
 */
class Solution {
    public ListNode addTwoNumbers(ListNode l1, ListNode l2) {
        int sum = 0, carry = 0;
        ListNode l3 = new ListNode();
        ListNode head = l3;
        while(l1 != null && l2 != null){
            
            ListNode temp = new ListNode();
            l3.next = temp;
            l3 = l3.next;
            
            sum = l1.val + l2.val + carry;
            carry = sum > 9 ? 1 : 0;
            sum = sum%10;
            
            l3.val = sum;
            l1 = l1.next;
            l2 = l2.next;
            
            
        }
        
        while( l1 != null){
            ListNode temp = new ListNode();
            l3.next = temp;
            l3 = l3.next;
            
            sum = l1.val + carry;
            carry = sum > 9 ? 1 : 0;
            sum = sum%10;
            
            l3.val = sum;
            l1 = l1.next;
            
            
        }
        
        while( l2 != null){
            ListNode temp = new ListNode();
            l3.next = temp;
            l3 = l3.next;
            
            sum = l2.val + carry;
            carry = sum > 9 ? 1 : 0;
            sum = sum%10;
            
            l3.val = sum;
            l2 = l2.next;
            
        }
        if(carry > 0){
            ListNode temp = new ListNode();
            l3.next = temp;
            l3 = l3.next;
            l3.val = carry;
        }
        
        return head.next;
    }
    
}
