import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { BookOpen, ChevronLeft, ChevronRight, ZoomIn, Download } from 'lucide-react';
import graphicNovelHero from '@/assets/graphic-novel-hero.jpg';

const GraphicNovel = () => {
  // Simulate comic book pages
  const comicPages = Array.from({ length: 20 }, (_, i) => ({
    id: i + 1,
    title: `Chapter ${Math.floor(i / 4) + 1} - Page ${(i % 4) + 1}`,
    thumbnail: graphicNovelHero // Using placeholder image
  }));

  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-20">
        {/* Hero Section */}
        <section className="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
          <div 
            className="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style={{ backgroundImage: `url(${graphicNovelHero})` }}
          >
            <div className="absolute inset-0 bg-background/70 backdrop-blur-sm"></div>
          </div>
          
          <div className="relative z-10 container mx-auto px-4 text-center">
            <h1 className="text-5xl md:text-6xl font-bold mb-6 bg-gradient-hero bg-clip-text text-transparent">
              Waterways Graphic Novel
            </h1>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto mb-8">
              Dive into the visual storytelling of Waterways through our interactive graphic novel. 
              Experience the mystery and adventure in stunning comic book format.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Button 
                size="lg"
                className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)] text-lg px-8 py-4"
              >
                <BookOpen className="mr-2" size={20} />
                Start Reading
              </Button>
              <Button 
                variant="outline" 
                size="lg"
                className="border-accent text-accent hover:bg-accent hover:text-accent-foreground text-lg px-8 py-4"
              >
                <Download className="mr-2" size={20} />
                Download PDF
              </Button>
            </div>
          </div>
        </section>

        {/* Comic Reader Interface */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <div className="max-w-6xl mx-auto">
              <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
                Interactive Comic Reader
              </h2>
              
              {/* Main Reader */}
              <Card className="mb-8 bg-card border-border overflow-hidden">
                <div className="aspect-[3/4] bg-muted flex items-center justify-center relative group">
                  {/* Current Page Display */}
                  <div 
                    className="w-full h-full bg-cover bg-center bg-no-repeat"
                    style={{ backgroundImage: `url(${graphicNovelHero})` }}
                  >
                    <div className="absolute inset-0 bg-background/20"></div>
                  </div>
                  
                  {/* Reader Controls */}
                  <div className="absolute inset-0 flex items-center justify-between p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <Button 
                      variant="secondary" 
                      size="lg"
                      className="bg-background/80 hover:bg-background/90 backdrop-blur-sm"
                    >
                      <ChevronLeft size={24} />
                    </Button>
                    <div className="flex gap-2">
                      <Button 
                        variant="secondary" 
                        size="sm"
                        className="bg-background/80 hover:bg-background/90 backdrop-blur-sm"
                      >
                        <ZoomIn size={16} />
                      </Button>
                    </div>
                    <Button 
                      variant="secondary" 
                      size="lg"
                      className="bg-background/80 hover:bg-background/90 backdrop-blur-sm"
                    >
                      <ChevronRight size={24} />
                    </Button>
                  </div>
                  
                  {/* Page Counter */}
                  <div className="absolute bottom-4 left-1/2 transform -translate-x-1/2">
                    <div className="bg-background/80 backdrop-blur-sm px-4 py-2 rounded-full">
                      <span className="text-sm font-medium text-foreground">Page 1 of 20</span>
                    </div>
                  </div>
                </div>
              </Card>

              {/* Page Navigation */}
              <div className="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-10 gap-4">
                {comicPages.slice(0, 10).map((page) => (
                  <Card 
                    key={page.id}
                    className="aspect-[3/4] overflow-hidden border-border hover:border-accent transition-all duration-300 cursor-pointer group"
                  >
                    <div 
                      className="w-full h-full bg-cover bg-center bg-no-repeat group-hover:scale-110 transition-transform duration-300"
                      style={{ backgroundImage: `url(${page.thumbnail})` }}
                    >
                      <div className="absolute inset-0 bg-background/40 group-hover:bg-background/20 transition-colors duration-300"></div>
                      <div className="absolute bottom-1 left-1 right-1">
                        <div className="bg-background/80 backdrop-blur-sm px-2 py-1 rounded text-xs text-foreground text-center">
                          {page.id}
                        </div>
                      </div>
                    </div>
                  </Card>
                ))}
              </div>
              
              {/* Load More Button */}
              <div className="text-center mt-8">
                <Button variant="outline" className="border-accent text-accent hover:bg-accent hover:text-accent-foreground">
                  Load More Pages
                </Button>
              </div>
            </div>
          </div>
        </section>

        {/* Story Overview */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto">
              <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
                The Waterways Story
              </h2>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                  <h3 className="text-2xl font-semibold mb-6 text-foreground">
                    Visual Storytelling at Its Best
                  </h3>
                  <p className="text-muted-foreground mb-6 leading-relaxed">
                    Experience the Waterways universe through stunning visual narratives that bring 
                    the characters and mysteries of Waterways Academy to life. Each panel is carefully 
                    crafted to immerse you in the sci-fi world of the Florida mangrove ecosystem.
                  </p>
                  <p className="text-muted-foreground mb-6 leading-relaxed">
                    Follow the students as they navigate school life while uncovering the mysterious 
                    elements that make Waterways Academy unlike any other school. The graphic novel 
                    expands on storylines from the TV series and provides deeper character development.
                  </p>
                  <Button className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)]">
                    Begin Your Journey
                  </Button>
                </div>
                
                <div className="grid grid-cols-2 gap-4">
                  {comicPages.slice(0, 4).map((page) => (
                    <Card 
                      key={page.id}
                      className="aspect-[3/4] overflow-hidden border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)]"
                    >
                      <div 
                        className="w-full h-full bg-cover bg-center bg-no-repeat hover:scale-105 transition-transform duration-300"
                        style={{ backgroundImage: `url(${page.thumbnail})` }}
                      >
                        <div className="absolute inset-0 bg-background/30"></div>
                      </div>
                    </Card>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Features */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
              Reading Features
            </h2>
            
            <div className="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
              <Card className="p-8 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)] text-center">
                <BookOpen className="w-16 h-16 bg-gradient-ocean rounded-full p-4 mx-auto mb-4 text-primary-foreground" />
                <h3 className="text-xl font-semibold mb-3 text-foreground">Interactive Reading</h3>
                <p className="text-muted-foreground">
                  Browse through pages with smooth transitions and zoom capabilities for detailed artwork examination.
                </p>
              </Card>
              
              <Card className="p-8 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)] text-center">
                <ZoomIn className="w-16 h-16 bg-gradient-mangrove rounded-full p-4 mx-auto mb-4 text-primary-foreground" />
                <h3 className="text-xl font-semibold mb-3 text-foreground">High-Quality Art</h3>
                <p className="text-muted-foreground">
                  Enjoy stunning illustrations that capture the beauty and mystery of the Florida ecosystem.
                </p>
              </Card>
              
              <Card className="p-8 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)] text-center">
                <Download className="w-16 h-16 bg-accent rounded-full p-4 mx-auto mb-4 text-accent-foreground" />
                <h3 className="text-xl font-semibold mb-3 text-foreground">Download & Share</h3>
                <p className="text-muted-foreground">
                  Download individual chapters or the complete novel for offline reading and sharing with friends.
                </p>
              </Card>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default GraphicNovel;