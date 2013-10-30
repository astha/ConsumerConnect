#include <iostream>
#include <fstream>
#include <string>
#include <unordered_map>
#include <cstdlib>
#include <time.h>

using namespace std;

// function to print random element of key 'str' 
void printrandom (unordered_multimap <string,string> mymap, string& str)
{
  char c;   char key[10000];
  string text, keystring;
  int i; 

  // number of elements with key 'str' 
  int size=(int)mymap.count(str);
  // find the iterator to first and last productions with key 'str'
  auto range = mymap.equal_range(str);
  // random number from 0 to size-1
  int id=rand() % size;
  
  // find a random production from range
  for (auto iter=range.first; id>=0; iter++, id--)
  { 
    if (id==0) 
    {
      text=iter->second;
    }
  } 
  
  // traverse the random production character by character, and print it
  string::iterator it;
  for ( it=text.begin() ; it != text.end(); it++ )
  {
    c=*it;
    
    // if a terminal is encountered, simply print the character
    if (c!='<') {cout<<c;}

    // if a variable is encountered, find the key value
    else 
    { 
      i=0;
      it++;
      c=*it;
      // store the key value till '>' is encountered
      while (c!='>')
      {
        key[i]=c;
        it++; i++;
        c=*it;
      }
      key[i]='\0';
      // convert to string form
      keystring=key;
      
      // print random production corresponding to that key
      printrandom(mymap, keystring);
    }
  } 
} 


int main (int argc, char* argv[])
{
  // time seed
  srand ((int) time(NULL));
  
  string line;
  char a; char word[10000]; char key[10000]; int i;char response;
  string start="start";
  string keystring, wordstring;
  unordered_multimap <string,string> grammar;
  
  // input file stream
  ifstream filein ;
  // open file given as argument in command line
  filein.open("/Users/sweetastha23/Downloads/reviews.g");
  
  if (filein.is_open())
  {
    a=filein.get();
    while (a!=EOF)
    {
      // if a '{' is found, look for a variable(key) term and its productions
      if (a=='{')
      {
        // look for '<'
        a=filein.get();
        while (a!='<'){a=filein.get();}
        
        // store the corresponding variable in keystring
        i=0;
        a=filein.get();
        // end storing when '>' is encountered
        while (a!='>') 
        {
          key[i]=a;
          i++;
          a=filein.get();
        }
        key[i]='\0';
        // convert to string form 
        keystring = key;
       
        while (a!='\n') {a=filein.get();}
        // if extra whitespace is found after variable name, ignore it
        while (a=='\n' || a=='\t' || a==' ') {a=filein.get();}
        
        // read till a '}' is found
        while (a!='}')
        {
          i=0;
          // store the production till it ends with ';'
          while (a!=';')
          {
            // keep only one blank space if extra whitespace is encountered
            if (a==' '|| a=='\t'|| a=='\n') 
            {
              word[i]=' '; i++;
              while (a==' ' || a=='\t' || a=='\n') {a=filein.get();}
            }
            
            /*
            removing this code, because then for files like Bionic-Woman-episode,
            unintentional newlines are also included in output
            keep one endline, if many endlines are encountered 
            else if (a=='\n') 
            {
              word[i]='\n'; i++;
              while(a=='\n'|| a=='\t'|| a==' ') {a=filein.get();}
            }
            */
            
            // else simply store the character in production
            else 
            { 
              word[i]=a;
              i++;
              a=filein.get();
            }
          }
          i--;
          // if any extra space is found in end, remove it
          while (word[i]==' ' || word[i]=='\t' || word[i]=='\n') {i--;}
          word[i+1]='\0'; 
          
          // convert to string
          wordstring=word;
          
          // insert the pair in multimap 
          grammar.insert({keystring,wordstring});
          //cout<<keystring<<" : "<<wordstring<<endl;
          
          // look for next production
          a=filein.get();
          while (a=='\n'|| a=='\t' || a==' ') {a=filein.get();} 
        }
        a=filein.get();
      }
      else a=filein.get();
    }
    
    // close file
    filein.close();
    
    // print one random text
    do
    {
      printrandom(grammar, start); 
      cout<<endl; 
      // if more random text is required, continue the loop
      cout <<"More random text? (Y/N) ";
      cin>> response; 
    } while (response=='Y' || response=='y');
  }
  
  // if file specified could not be opened
  else cout<<"File could not be opened" <<endl;
  
  return 0;
}
 
