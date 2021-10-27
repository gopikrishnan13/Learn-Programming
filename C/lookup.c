//code for list out interface in device like ifconfig
//!!TO COMPLIE THIS CODE USING -lpcap  EXAMPLE: gcc -lookup.c -lpcap
#include<stdio.h>
#include<pcap.h>

int main(int argc, char *argv)
{
    char error[PCAP_ERRBUF_SIZE]; //PCAP_ERRBUF_SIZE is variable in pcap libary iths value is 255
    pcap_if_t *interface, *temp; //pcap_if_t is a struct in pcap libary
    int i = 0; // to count how many interface's

    if(pcap_findalldevs(&interface, error) == -1) //pcap_findalldevs is funciton to scan and find how many interface in the device they have 2 parameter firt 1 for store interface name next one is if any error acuquire to stroe that
    {
        puts("Error on scan a interface's\n");
        return -1;
    }    
    puts("available interface's are :> \n");
    for(temp = interface; temp; temp = temp->next)
    {
        printf("#%d : %s \n",++i,temp->name);
    }

    return 0;
}