//COMPILE USEING -lpcap
#include<stdio.h>
#include<stdlib.h>
#include<pcap.h> // To invoke the libpcap library
#include<errno.h>
#include<sys/socket.h>
#include<netinet/in.h>
#include<arpa/inet.h>

int main(int argc, char *argv)
{
    char *deviceName, *netAddress, *netSubnetmask;
    int returnCode;
    char error[PCAP_ERRBUF_SIZE];

    bpf_u_int32 netAddressInt, netSubnetmaskInt; //struct in pcap and IP address as unsigned 32 bit
    struct in_addr addr;

    //Asks pcap to give us a valid eht base device to sniff on it
    deviceName = pcap_lookupdev(error);
    if(NULL == deviceName)
    {
        printf("Error : %s\n",error);
        return -1;
    }else
        printf("Device : %s\n",deviceName);

    //with the device in place, acquire the IP address and the subnet mask
    returnCode = pcap_lookupnet(deviceName, &netAddress, &netSubnetmask, error);

    if(-1 == returnCode)
    {
        printf("Error : %s\n",error);
        return -1;
    }

    //Convert the 32 bit int of IP and subnetmast into humaan readable form 
    addr.s_addr = netAddressInt;
    netAddress = inet_ntoa(addr);

    if(NULL == netAddress)
    {
        printf("inet_ntoa : Error on converting to IP\n");
        return -1;
    }else
    {
        printf("IP: %s\n",netAddress);
    }

    addr.s_addr = netSubnetmaskInt;
    netSubnetmask = inet_ntoa(addr);

    if(NULL == netSubnetmask)
    {
        printf("inet_ntoa : Error on converting to IP\n");
        return -1;
    }else
    {
        printf("Subnetmask: %s\n",netSubnetmask);
    }
}