#include <iostream>
#include <cstdio>
using namespace std;
void Pause()
{
    printf("Press Enter key to continue...");
    fgetc(stdin);
}
int main()
{
    cout << "Hello World!" << endl;
    Pause();
    return 0;
}

