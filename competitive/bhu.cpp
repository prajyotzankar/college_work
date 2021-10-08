#include<bits/stdc++.h>
using namespace std;
int main()
{
    int size;
    cout<<"Enter Array size:";
    cin>>size;
    int a[size];
    cout<<"Enter Array Elements:";
    for(int i=0;i<size;i++)
    {
        cin>>a[i];
    }
    int ans=2;
    int pd=a[1]-a[0];
    int j=2;
    int curr=2;
    
    while(j<size)
    {   
        if(pd==a[j]-a[j-1])
        {
            curr++; 
        }   
        else
        {
            pd=a[j]-a[j-1];
            curr=2;
        }
        ans=max(ans,curr);
        j++;
    }
    cout<<"The Longest Arithmetic Subarray:"<<ans<<endl;
    return 0;
}